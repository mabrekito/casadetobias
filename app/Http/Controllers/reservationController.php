<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservation;
class reservationController extends Controller
{
  public function getData(){
    return view('/reservation/zerostep');
  }

//   public function __construct() {
//   parent::__construct();
//   $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
//   $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
//   $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
//   $this->output->set_header('Pragma: no-cache');
//   $this->load->model('Reservation_Model');
//   $this->load->model('Monitoring_Model');
//   // $this->cart->destroy();
// }

public function selectDate() {
  $data['home'] 	= 0;
  $data['title']	= "Select Date";
  $data['header'] = $this->load->view('includes/header.php', $data, TRUE);
  $data['footer'] = $this->load->view('includes/footer.php', $data, TRUE);
}

public function sessionDate() {
  $this->cart->destroy();
  $selectedDate = $this->input->post('daterange');
  $promo = $this->input->post('promo');
  $split = explode(" - ", $selectedDate);
  $start = date("Y-m-d", strtotime($split[0]));
  $end = date("Y-m-d", strtotime($split[1]));
  $this->session->set_userdata('daterange', $date);

  return redirect('/reservation/step1');
  // redirect(base_url('reservation/step1'));
}

public function selectRooms() {
  $data['home'] 	= 0;
  $data['title']	= "Select Rooms";
  $daterange = $this->session->userdata('daterange');
  if(!$daterange){
    redirect(base_url('reservation/selectDate'));
  }
  $diff = date_diff(date_create($daterange['start']), date_create($daterange['end']));
  $data['interval'] = $diff->format("%a");
  $data['checkIn'] = $daterange['start'];
  $data['checkOut'] = $daterange['end'];

  $result = $this->Reservation_Model->fetchRooms();
  foreach ($result as $row) {
    $availableHotels = $this->Reservation_Model->fetchAvailableRooms($row['room_ID'], $data['checkIn'], $data['checkOut']);
    if($row["room_Pax"] > $availableHotels['total']){
      $rooms[] = $row;
      $numberofrooms[] = $row['room_Pax'] - $availableHotels['total'];
    }
  }
  $data["numberofrooms"] = (isset($numberofrooms)) ? $numberofrooms : 0;
  $data['rooms'] = (isset($rooms)) ? $rooms : array();
  $data['header'] = $this->load->view('includes/header.php', $data, TRUE);
  $data['footer'] = $this->load->view('includes/footer.php', $data, TRUE);
  $this->load->view('pages/reservation/selectRooms.php', $data);
}

public function paymentDetails() {
  $data['home'] 	= 0;
  $data['title']	= "Payment Details";
  $daterange = $this->session->userdata('daterange');
  //if(!$daterange || count($this->cart->contents() == 0)){
    //redirect(base_url('reservation/selectDate'));
  //}
  $diff = date_diff(date_create($daterange['start']), date_create($daterange['end']));
  $data['interval'] = $diff->format("%a");
  $data['checkIn'] = $daterange['start'];
  $data['checkOut'] = $daterange['end'];
  $data['header'] = $this->load->view('includes/header.php', $data, TRUE);
  $data['footer'] = $this->load->view('includes/footer.php', $data, TRUE);
  $this->load->view('pages/reservation/paymentDetails.php', $data);
}

public function reservationSuccess(){
  $data['home'] 	= 0;
  $data['title']	= "Reservation Success";
  $data['header'] = $this->load->view('includes/header.php', $data, TRUE);
  $data['footer'] = $this->load->view('includes/footer.php', $data, TRUE);
  $data['message'] = $this->session->userdata('message');
  $data['ref_num'] = $this->session->userdata('ref_num');

  $this->load->view('pages/reservation/reservationSuccess.php', $data);
}

public function saveReservation(){
  $submit = $this->input->post("submit");
  if($submit == "reserveNow"){
    $datetime = $this->session->userdata('daterange');
    if($datetime){
      $fname = ucfirst($this->input->post("fname"));
      $lname = ucfirst($this->input->post("lname"));
      $email = $this->input->post("email");
      $mnumber = $this->input->post("mobnumber");
      $time = date("H:i:s", strtotime($this->input->post("time")));
      $specialrequest = $this->input->post("specialRequest");
      $adult = 0;
      $child = 0;
      $resStat = 'pending';

      $paymentType = $this->input->post("paymentType");
      $diff = date_diff(date_create($datetime['start']), date_create($datetime['end']));
      $interval = $diff->format("%a");
      $ref_num = rand(10*45, 100*98).date("y-m-d");
      $checkin = $datetime['start']." ". date("H:i:s", strtotime("1:00"));
      $checkout = $datetime['end']. " ". date("H:i:s", strtotime("12:00"));
      $grandtotal = (int)$interval * $this->cart->total();
      $downpayment = $grandtotal * 0.30;
      $dateexpiry = date("Y-m-d");
      $dateexpiry1 = date("Y-m-d", strtotime($dateexpiry . "+3 days"));
      if($paymentType == "bank"){
        $bankAcc = $this->Reservation_Model->getBankAccount();
        $xbankAcc = $bankAcc['bank_Name'];
        $message = "You have successfully made a reservation. Please take note of your reference number : ";
        $message2 = "For payment please deposit in this account number : ".$xbankAcc."";
        $button = "";
      }else if($paymentType == "paypal"){
        $paypalAcct = $this->Reservation_Model->getPaypalAccount();
        $xpaypalAcct = $paypalAcct['paypal_Account'];
        $xitemamount = $this->cart->total();
        $message = "You have successfully made a reservation. Please take note of your reference number : ";
        $message2 = "For payment please proceed to PayPal";
        $button = '
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="new">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="'.$xpaypalAcct.'">
        <input type="hidden" name="item_name" value="Casa Escondida Reservation">
        <input type="hidden" name="item_number" value="'.$ref_num.'">
        <input type="hidden" name="amount" id="paypalamount" value="'.$downpayment.'">

        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="no_note" value="1">
        <input type="hidden" name="currency_code" value="PHP">

        <input type="hidden" name="address_override" value="1">


        <input type="hidden" name="return" value="'.base_url('reservation/hotelCheckout').'">
        <input type="hidden" name="cancel_return" value="'.base_url('reservation/cancelReservation').'">
        <div class="p-5" align="center">
        <input type="image" name="submit" border="0" src="https://www.paypalobjects.com/webstatic/en_AU/i/buttons/btn_paywith_primary_l.png" alt="PayPal - The safer, easier way to pay online">
        </div>
        </form>
        ';
      }else if($paymentType == "walkin"){
        $message = "You have successfully made a reservation. Please take note of your reference number : ";
        $message2 = "";
        $button = "";
      }

      $payments = array("message" => $message, "message2" => $message2, "button" => $button);
      foreach ($this->cart->contents() as $row) {
        if($row['options'] == "room"){
          $adult += $row['adult'];
          $child += $row['children'];
        }
      }

      $this->Reservation_Model->insertGuestDetails($ref_num, $fname, $lname, $email, $mnumber, $adult, $child, $specialrequest);
      if($paymentType == "walkin"){
        $resStat = "paid";
        $this->Monitoring_Model->updateCustPayment($ref_num, $downpayment);
      }
      $this->Reservation_Model->insertReservationCost($ref_num, $downpayment, $grandtotal, $paymentmethod, $dateexpiry1, $resStat);
      foreach ($this->cart->contents() as $row) {
        if($row['options'] == "room"){
          $this->Reservation_Model->insertReservationRoom($row['id'], $row['name'], $ref_num, $checkin, $checkout, $row['qty'], $row['price']);
        }
      }
      // $this->xEmailReservation($ref_num, $email, $checkin, $checkout, $interval, $specialrequest);
      $this->cart->destroy();
      $this->session->unset_userdata('daterange');
      $this->session->unset_userdata('roomCount');
      $this->session->set_userdata("ref_num", $ref_num);
      $this->session->set_userdata("message", $payments);
      redirect("reservation/reservationSuccess");
    }else{
      redirect("reservation/selectDate");
    }
  }else{
    redirect("reservation/paymentDetails");
  }
}

public function jsonCart(){
  $temptable = array();
  foreach ($this->cart->contents() as $row) {
    if($row["options"] == "amenity"){
      $temptable[] = array(
        "id" 		=> $row['id'],
        "rowid" 	=> $row['rowid'],
        "added"		=> $row['options'],
        "name" 		=> $row['name'],
        "price" 	=> $row['price'],
        "subtotal"	=> $row['subtotal'],
        "lights"	=> $row['lights'],
        "date"	=> $row['date'],
        "timein"	=> $row['timein'],
        "timeout"	=> $row['timeout'],
        "grandtotal"=> $this->cart->total()
      );
    }else{
      $temptable[] = array(
        "id" 		=> $row['id'],
        "rowid" 	=> $row['rowid'],
        "added"		=> $row['options'],
        "name" 		=> $row['name'],
        "price" 	=> $row['price'],
        "subtotal"	=> $row['subtotal'],
        "grandtotal"=> $this->cart->total()
      );
    }

  }
  echo json_encode($temptable);
}

public function add_Room(){
  $data = array(
    'id' 		=> $this->input->post('id'),
    'name' 		=> $this->input->post('name'),
    'price' 	=> $this->input->post('price'),
    'qty' 		=> $this->input->post('pax'),
    'options' 	=> $this->input->post('options'),
    'adult' 	=> $this->input->post('adult'),
    'children' 	=> $this->input->post('children'),
  );

  $this->cart->insert($data);
  $counter = 0;
  foreach ($this->cart->contents() as $row) {
    if($row['options'] == "room"){
      $counter++;
    }
  }

  $this->session->set_userdata("roomCount", $counter);
  echo $counter;
}

public function remove_Room(){
  $counter = ($this->session->userdata('roomCount')) ? $this->session->userdata('roomCount') : 0;
  foreach ($this->cart->contents() as $row) {
    if($row['options'] == 'room'){
      if($row['id'] == $this->input->post("id")){
        $row_id = $row['rowid'];
        $counter--;
      }
    }
  }

  $data = array(
    'rowid' => $row_id,
    'qty' => 0,
  );

  $this->cart->update($data);

  $this->session->set_userdata("roomCount", $counter);

  echo $counter;
}

public function show_RoomDetails(){
  $datetime = $this->session->userdata('daterange');
  $output = '';
  $no = 0;
  $diff = date_diff(date_create($datetime['start']), date_create($datetime['end']));
  $interval = $diff->format("%a");
  // print_r($this->cart->contents());
  // exit;
  foreach ($this->cart->contents() as $items) {
    $no++;
    if($items['options'] == 'room'){
      $numpersons = $items['adult'] + $items['children'];
      $output .='
      <thead>
      <tr>
      <th>'.$items['name'].'</th>
      <th class="text-right"><button class="remove_Room btn btn-link" data-id="'.$items['id'].'" data-rowid="'.$items['rowid'].'" title="Remove"><i class="fa fa-times"></i></button></th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td colspan="2">'.number_format($items['subtotal']).'</td>
      </tr>
      <tr>
      <td >Number of person(s): '.$numpersons.'</td>
      </tr>
      <tr>
      <td >Number of room(s): '.$items['qty'].'</td>
      </tr>
      </tbody>
      ';
    }
  }
// ₱
  echo $output;
}

public function show_Prices(){
  $datetime = $this->session->userdata('daterange');
  $diff = date_diff(date_create($datetime['start']), date_create($datetime['end']));

  $interval = $diff->format("%a");
  $grandtotal = (int)$interval * $this->cart->total();
  $downpayment = $grandtotal * 0.30;
  $output = '';
  $counter = 0;
  $totalRoom = 0;
  $totalAmenity = 0;
  $numguest = 0;
  // foreach ($this->cart->contents() as $items) {
  // 	if($items['options'] == 'room'){
  // 		$totalRoom += (float)$items['price'];
  // 		$numguest += $items['children'] + $items['adult'];
  // 	}
  // 	if($items['options'] == 'amenity'){
  // 		$totalAmenity += (float)$items['price'];
  // 		$counter++;
  // 	}

  // }
  $output .= '
  <tr>
  <td>Reservation Amount</td>
  <td align="right">'.$downpayment.'</td>
  </tr>
  <tr>
  <td>Total Amount</td>
  <td align="right">'.$grandtotal.'</td>
  </tr>
  ';

  echo $output;
}

public function printResReceipt(){
  $ref_num = $this->input->get("ref_num");
  $data['payment'] = $this->Monitoring_Model->fetchPayment($ref_num);
  $data['info'] = $this->Monitoring_Model->fetchGuestDetails($ref_num);
  $data['rooms'] = $this->Monitoring_Model->fetchReservation($ref_num);
  $data['discount'] = '';
  $data['discountPrice'] = '';
  $total_cost = $data['payment']['total_Cost'];
  $cust_payment = $data['payment']['reservation_Cost'];

  $data['balance'] = (float)$total_cost - (float)$cust_payment;

  require(APPPATH . "third_party/fpdf/html2pdf.php");
  $html=$this->load->view("pages/pdf/res_receipt.php",$data,true);
  $pdf=new PDF();
  $pdf->AddPage();
  $pdf->SetFont("Arial","b",16);
  $pdf->Cell(0,8,"Test",0,2,"C");
  $pdf->Cell(0,8,"Check-in Receipt",0,2,"C");
  $pdf->SetFont('Arial','',14);
  $pdf->WriteHTML($html);
  $pdf->Cell(0,8,"",0,2,"C");
  $pdf->Cell(0,8,"",0,2,"C");
  $pdf->Cell(0,8,"",0,2,"C");
  $pdf->Cell(0,8,"Date Printed",0,2,"C");
  $pdf->Cell(0,8,date("F d, Y h:i A"),0,2,"C");
  $pdf->output();
}
}

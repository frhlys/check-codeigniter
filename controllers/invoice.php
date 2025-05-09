<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class invoice extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        // Load invoice form
        $this->load->view('invoice_form');
    }

    public function generate() {
        // Load TCPDF
        require_once APPPATH.'third_party/tcpdf/tcpdf.php';

        // Get POST data
        $invoiceNo = $this->input->post('invoice_no');
        $clientName = $this->input->post('client_name');
        $clientEmail = $this->input->post('client_email');
        $description = $this->input->post('description');
        $amount = $this->input->post('amount');

        // Create PDF
        $pdf = new TCPDF();
        $pdf->AddPage();

        $html = "
            <h1>INVOICE</h1>
            <p><strong>Invoice No:</strong> {$invoiceNo}</p>
            <p><strong>Client Name:</strong> {$clientName}</p>
            <p><strong>Email:</strong> {$clientEmail}</p>
            <p><strong>Description:</strong> {$description}</p>
            <p><strong>Amount:</strong> RM " . number_format($amount, 2) . "</p>
            <hr>
            <p>Thank you for your business.</p>
        ";

        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output("Invoice_{$invoiceNo}.pdf", 'I');
    }
}

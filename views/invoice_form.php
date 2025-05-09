<h2>Create Invoice</h2>
<form method="post" action="<?php echo base_url('invoice/generate'); ?>">
    <label>Invoice No:</label><br>
    <input type="text" name="invoice_no" required><br>

    <label>Client Name:</label><br>
    <input type="text" name="client_name" required><br>

    <label>Client Email:</label><br>
    <input type="email" name="client_email" required><br>

    <label>Description:</label><br>
    <input type="text" name="description" required><br>

    <label>Amount (RM):</label><br>
    <input type="number" step="0.01" name="amount" required><br><br>

    <input type="submit" value="Generate Invoice">
</form>

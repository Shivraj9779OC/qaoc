<?php
// Example snippet to add a note when invoice status changes
$notes = "Invoice #{$customer_invoice_no} status was changed from '{$previous_status_text}' to '{$inv_status_text}' by {$username} on {$status_change_datetime}.";

// Example snippet to append a note when a payment is deleted from an invoice
$notes .= "\nPayment on invoice #{$customer_invoice_no} was deleted by {$username} on " . date('Y-m-d H:i:s') . ".";
?>

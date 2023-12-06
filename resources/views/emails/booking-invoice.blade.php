<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Invoice | Kuchai Motor</title>

    <style>
        /* Media query for smaller screens */
        @media (max-width: 600px) {
            body {
                text-align: center;
            }
        }
    </style>
</head>

<body style="background-color: #f5f5f5; margin: 0; padding: 0; color: #333333;">

    <!-- Email Content -->
    <div
        style="max-width: 600px; margin: 20px auto; padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

        <h2 style="color: #333333;">Booking Invoice</h2>

        <p>Dear {{ $data->name }},</p>

        <p>Thank you for choosing Kuchai Motor. We are pleased to confirm your booking and provide you with the details
            of
            your purchase:</p>

        <ul>
            <li><strong>Product:</strong> {{ $data->motorcycle->model }}, {{ $data->motorcycle->brand }}</li>
            <li><strong>Date of Purchase:</strong> {{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</li>
            <li><strong>Amount:</strong> {{ $data->motorcycle->pricing }}</li>
        </ul>

        <p>If you have any questions or concerns regarding your booking, please feel free to contact us. We appreciate
            your
            business and look forward to serving you again in the future.</p>

        <p>Thank you,</p>
        <p>Kuchai Motor Team</p>

        <!-- Store Contact Information -->
        <div style="margin-top: 20px; background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
            <p><strong>Contact Information:</strong></p>
            <p><strong>Phone:</strong> 03-7981-0331</p>
            <p><strong>Address:</strong> 56-58, Jalan 2/116B, Kuchai Entrepreneurs Park, 58200 Kuala Lumpur, Wilayah
                Persekutuan Kuala Lumpur</p>
        </div>

    </div>
</body>

</html>
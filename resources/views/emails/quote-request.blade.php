<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Request – Al Zaha General Trading</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f1eb; font-family: Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f4f1eb; padding:40px 16px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="max-width:600px; width:100%;">

                    <!-- HEADER -->
                    <tr>
                        <td style="background-color:#fffdf7; border-radius:12px 12px 0 0; padding:36px 48px 32px; text-align:center;">

                            <!-- Logo -->
                            <div style="margin:0 0 24px;">
                                <a href="{{ config('app.url') }}" style="display:inline-block; text-decoration:none;">
                                    <img src="https://drive.google.com/uc?export=view&id=1yDHMTW5LfWMV2iqBaGcYutKdqzUoxgD0"
                                         alt="Al Zaha General Trading"
                                         style="display:block; height:40px; width:auto; margin:0 auto; border:0;">
                                </a>
                            </div>

                            <!-- Gold divider -->
                            <div style="width:48px; height:2px; background:#c19b46; margin:0 auto 20px;"></div>

                            <p style="margin:0; font-size:11px; letter-spacing:0.18em; text-transform:uppercase; color:#c19b46;">New Quote Request</p>
                            <h1 style="margin:10px 0 0; font-size:28px; font-weight:normal; color:#1c140a; letter-spacing:0.01em; line-height:1.3; font-family: Georgia, serif;">Quote Request Received</h1>
                        </td>
                    </tr>

                    <!-- GOLD BAR -->
                    <tr>
                        <td style="height:3px; background-color:#c19b46; font-size:0; line-height:0;">&nbsp;</td>
                    </tr>

                    <!-- BODY -->
                    <tr>
                        <td style="background-color:#ffffff; padding:40px 48px;">

                            <p style="margin:0 0 32px; font-size:14px; color:#8a7a60; line-height:1.7;">
                                A visitor submitted a quote request through your website. Please review the details below and follow up at your earliest convenience.
                            </p>

                            <!-- Full Name -->
                            <p style="margin:0 0 4px; font-size:10px; letter-spacing:0.15em; text-transform:uppercase; color:#c19b46;">Full Name</p>
                            <p style="margin:0 0 20px; font-size:16px; color:#1c140a;">{{ $name }}</p>
                            <hr style="border:none; border-top:1px solid #f0ece2; margin:0 0 20px;">

                            <!-- Company -->
                            <p style="margin:0 0 4px; font-size:10px; letter-spacing:0.15em; text-transform:uppercase; color:#c19b46;">Company</p>
                            <p style="margin:0 0 20px; font-size:16px; color:#1c140a;">{{ $company ?: '—' }}</p>
                            <hr style="border:none; border-top:1px solid #f0ece2; margin:0 0 20px;">

                            <!-- Email -->
                            <p style="margin:0 0 4px; font-size:10px; letter-spacing:0.15em; text-transform:uppercase; color:#c19b46;">Email Address</p>
                            <p style="margin:0 0 20px; font-size:16px; color:#1c140a;">
                                <a href="mailto:{{ $email }}" style="color:#8a6f2e; text-decoration:none;">{{ $email }}</a>
                            </p>
                            <hr style="border:none; border-top:1px solid #f0ece2; margin:0 0 20px;">

                            <!-- Phone -->
                            <p style="margin:0 0 4px; font-size:10px; letter-spacing:0.15em; text-transform:uppercase; color:#c19b46;">Phone</p>
                            <p style="margin:0 0 20px; font-size:16px; color:#1c140a;">{{ $phone ?: '—' }}</p>
                            <hr style="border:none; border-top:1px solid #f0ece2; margin:0 0 20px;">

                            <!-- Industry Segment -->
                            <p style="margin:0 0 4px; font-size:10px; letter-spacing:0.15em; text-transform:uppercase; color:#c19b46;">Industry Segment</p>
                            <p style="margin:0 0 20px; font-size:16px; color:#1c140a;">{{ $industry ?: '—' }}</p>
                            <hr style="border:none; border-top:1px solid #f0ece2; margin:0 0 24px;">

                            <!-- Project Details -->
                            <p style="margin:0 0 12px; font-size:10px; letter-spacing:0.15em; text-transform:uppercase; color:#c19b46;">Project Details</p>
                            <div style="background:#fdf9f1; border-left:3px solid #c19b46; border-radius:0 8px 8px 0; padding:20px 24px; font-size:15px; line-height:1.8; color:#3d2f18; white-space:pre-wrap;">{{ $details ?: '—' }}</div>

                            <!-- Attachment (conditional) -->
                            @if ($file ?? null)
                            <p style="margin:24px 0 4px; font-size:10px; letter-spacing:0.15em; text-transform:uppercase; color:#c19b46;">Attachment</p>
                            <p style="margin:0; font-size:15px; color:#1c140a; background:#f7f4eb; border:1px solid #e8dfc8; border-radius:6px; padding:12px 16px; display:inline-block;">
                                📎 {{ $file->getClientOriginalName() }}
                            </p>
                            @endif

                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr>
                        <td style="background-color:#f7f4eb; border-top:1px solid #e8dfc8; border-radius:0 0 12px 12px; padding:20px 48px; text-align:center;">
                            <p style="margin:0; font-size:11px; color:#b0a080; letter-spacing:0.02em;">
                                Sent automatically via the Al Zaha General Trading website &nbsp;&middot;&nbsp; Please do not reply to this email
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
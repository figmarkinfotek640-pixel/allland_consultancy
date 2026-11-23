<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Student Enquiry Received</title>
</head>
<body style="margin: 0; padding: 0; background-color: #F1F5F9; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #0F172A; -webkit-font-smoothing: antialiased;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color: #F1F5F9; padding: 30px 15px;">
    <tr>
      <td align="center">
        <table role="presentation" width="100%" style="max-width: 620px; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #E2E8F0;">
          
          <!-- Header -->
          <tr>
            <td style="background-color: #0F172A; padding: 26px 32px; border-bottom: 3px solid #0580C1;">
              <table role="presentation" width="100%">
                <tr>
                  <td>
                    <span style="display: inline-block; background-color: #0580C1; color: #ffffff; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; padding: 4px 10px; border-radius: 4px;">New Lead</span>
                    <h1 style="margin: 10px 0 0; font-size: 20px; font-weight: 800; color: #ffffff;">Website Student Enquiry</h1>
                  </td>
                  <td align="right" style="vertical-align: top;">
                    <span style="font-size: 12px; color: #94A3B8;">{{ now()->setTimezone('Asia/Kolkata')->format('d M Y, h:i A') }} IST</span>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Details Table -->
          <tr>
            <td style="padding: 30px 32px;">
              <p style="margin: 0 0 20px; font-size: 15px; color: #475569;">
                A new inquiry has been submitted through the website form. Below are the candidate's complete details:
              </p>

              <table role="presentation" width="100%" style="border-collapse: collapse; margin-bottom: 25px;">
                <tr style="border-bottom: 1px solid #E2E8F0;">
                  <td style="padding: 12px 14px; font-weight: 600; color: #64748B; width: 150px; background-color: #F8FAFC;">Full Name</td>
                  <td style="padding: 12px 14px; font-weight: 700; color: #0F172A; font-size: 15px;">{{ $inquiry->name }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #E2E8F0;">
                  <td style="padding: 12px 14px; font-weight: 600; color: #64748B; background-color: #F8FAFC;">Email Address</td>
                  <td style="padding: 12px 14px; color: #0284C7; font-weight: 600;">
                    <a href="mailto:{{ $inquiry->email }}" style="color: #0284C7; text-decoration: none;">{{ $inquiry->email }}</a>
                  </td>
                </tr>
                <tr style="border-bottom: 1px solid #E2E8F0;">
                  <td style="padding: 12px 14px; font-weight: 600; color: #64748B; background-color: #F8FAFC;">Phone / WhatsApp</td>
                  <td style="padding: 12px 14px; color: #0F172A; font-weight: 600;">
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $inquiry->phone) }}" style="color: #0F172A; text-decoration: none;">{{ $inquiry->phone }}</a>
                    &nbsp;&nbsp;
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->phone) }}" style="font-size: 12px; color: #16A34A; text-decoration: none; font-weight: 700;">[WhatsApp]</a>
                  </td>
                </tr>
                @if(!empty($inquiry->destination))
                <tr style="border-bottom: 1px solid #E2E8F0;">
                  <td style="padding: 12px 14px; font-weight: 600; color: #64748B; background-color: #F8FAFC;">Destination</td>
                  <td style="padding: 12px 14px; color: #0F172A; font-weight: 600;">{{ $inquiry->destination }}</td>
                </tr>
                @endif
                @if(!empty($inquiry->qualification))
                <tr style="border-bottom: 1px solid #E2E8F0;">
                  <td style="padding: 12px 14px; font-weight: 600; color: #64748B; background-color: #F8FAFC;">Qualification</td>
                  <td style="padding: 12px 14px; color: #0F172A;">{{ $inquiry->qualification }}</td>
                </tr>
                @endif
                @if(!empty($inquiry->service_interest))
                <tr style="border-bottom: 1px solid #E2E8F0;">
                  <td style="padding: 12px 14px; font-weight: 600; color: #64748B; background-color: #F8FAFC;">Service Interest</td>
                  <td style="padding: 12px 14px; color: #0F172A;">{{ $inquiry->service_interest }}</td>
                </tr>
                @endif
                @if(!empty($inquiry->preferred_intake))
                <tr style="border-bottom: 1px solid #E2E8F0;">
                  <td style="padding: 12px 14px; font-weight: 600; color: #64748B; background-color: #F8FAFC;">Preferred Intake</td>
                  <td style="padding: 12px 14px; color: #0F172A;">{{ $inquiry->preferred_intake }}</td>
                </tr>
                @endif
                @if(!empty($inquiry->message))
                <tr style="border-bottom: 1px solid #E2E8F0;">
                  <td style="padding: 12px 14px; font-weight: 600; color: #64748B; background-color: #F8FAFC; vertical-align: top;">Student Message</td>
                  <td style="padding: 12px 14px; color: #334155; line-height: 1.6; white-space: pre-line;">{{ $inquiry->message }}</td>
                </tr>
                @endif
              </table>

              <!-- Action buttons -->
              <table role="presentation" width="100%">
                <tr>
                  <td>
                    <a href="{{ url('/admin/inquiries/' . $inquiry->id) }}" style="display: inline-block; background-color: #0B1B3D; color: #ffffff; text-decoration: none; font-size: 13px; font-weight: 700; padding: 11px 20px; border-radius: 6px;">
                      View in Admin Panel &rarr;
                    </a>
                  </td>
                  <td align="right">
                    <a href="mailto:{{ $inquiry->email }}?subject={{ rawurlencode('Response to your enquiry - All-Land Consultancy') }}" style="display: inline-block; background-color: #0580C1; color: #ffffff; text-decoration: none; font-size: 13px; font-weight: 700; padding: 11px 20px; border-radius: 6px;">
                      Reply to Candidate
                    </a>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background-color: #F8FAFC; border-top: 1px solid #E2E8F0; padding: 18px 32px; font-size: 12px; color: #94A3B8; text-align: center;">
              This notification was generated automatically by All-Land Consultancy CRM upon website inquiry submission.
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>

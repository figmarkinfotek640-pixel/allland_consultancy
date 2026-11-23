<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You for Contacting All-Land Consultancy</title>
</head>
<body style="margin: 0; padding: 0; background-color: #F4F6F9; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #1F2937; -webkit-font-smoothing: antialiased;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color: #F4F6F9; padding: 30px 15px;">
    <tr>
      <td align="center">
        <table role="presentation" width="100%" style="max-width: 600px; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #E5E7EB;">
          
          <!-- Header -->
          <tr>
            <td style="background-color: #0B1B3D; padding: 30px 35px; text-align: center;">
              <h1 style="margin: 0; font-size: 24px; font-weight: 800; color: #ffffff; letter-spacing: 0.5px;">ALL-LAND CONSULTANCY</h1>
              <p style="margin: 6px 0 0; font-size: 13px; color: #94A3B8; text-transform: uppercase; letter-spacing: 1.5px;">Aboard for Abroad • Aluva, Kerala</p>
            </td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding: 35px 35px 25px;">
              <h2 style="margin: 0 0 16px; font-size: 20px; font-weight: 700; color: #0B1B3D;">
                Dear {{ $inquiry->name }},
              </h2>
              <p style="margin: 0 0 16px; font-size: 15px; line-height: 1.6; color: #4B5563;">
                Thank you for reaching out to <strong>All-Land Consultancy</strong>. We have successfully received your enquiry and our senior counsellor in Aluva is currently reviewing your profile.
              </p>
              
              <div style="background-color: #F0F9FF; border-left: 4px solid #0580C1; padding: 18px 20px; border-radius: 6px; margin: 24px 0;">
                <h3 style="margin: 0 0 10px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.8px; color: #0284C7;">Enquiry Summary</h3>
                <table role="presentation" width="100%" style="font-size: 14px; line-height: 1.6; color: #334155;">
                  @if(!empty($inquiry->destination))
                  <tr>
                    <td style="width: 140px; padding: 3px 0; color: #64748B;">Destination:</td>
                    <td style="padding: 3px 0; font-weight: 600; color: #0B1B3D;">{{ $inquiry->destination }}</td>
                  </tr>
                  @endif
                  @if(!empty($inquiry->service_interest))
                  <tr>
                    <td style="padding: 3px 0; color: #64748B;">Service Interest:</td>
                    <td style="padding: 3px 0; font-weight: 600; color: #0B1B3D;">{{ $inquiry->service_interest }}</td>
                  </tr>
                  @endif
                  @if(!empty($inquiry->preferred_intake))
                  <tr>
                    <td style="padding: 3px 0; color: #64748B;">Preferred Intake:</td>
                    <td style="padding: 3px 0; font-weight: 600; color: #0B1B3D;">{{ $inquiry->preferred_intake }}</td>
                  </tr>
                  @endif
                  @if(!empty($inquiry->qualification))
                  <tr>
                    <td style="padding: 3px 0; color: #64748B;">Qualification:</td>
                    <td style="padding: 3px 0; font-weight: 600; color: #0B1B3D;">{{ $inquiry->qualification }}</td>
                  </tr>
                  @endif
                </table>
              </div>

              <p style="margin: 0 0 16px; font-size: 15px; line-height: 1.6; color: #4B5563;">
                One of our expert counsellors will contact you within <strong>24 business hours</strong> via phone or WhatsApp to guide you through university options, admissions, visa requirements, and document verification.
              </p>

              <!-- CTA / Direct Action -->
              <table role="presentation" width="100%" style="margin: 28px 0 15px;">
                <tr>
                  <td align="center">
                    <a href="https://wa.me/919074024242?text={{ rawurlencode('Hello All-Land Consultancy, I submitted an enquiry for ' . ($inquiry->destination ?: 'Study Abroad') . ' (Name: ' . $inquiry->name . ')') }}" 
                       style="display: inline-block; background-color: #25D366; color: #ffffff; text-decoration: none; font-size: 15px; font-weight: 700; padding: 14px 28px; border-radius: 8px; box-shadow: 0 4px 12px rgba(37,211,102,0.3);">
                      💬 Connect Instantly on WhatsApp
                    </a>
                  </td>
                </tr>
              </table>

              <p style="margin: 20px 0 0; font-size: 14px; line-height: 1.6; color: #6B7280; text-align: center;">
                Need immediate assistance? Call us directly at <a href="tel:+919074024242" style="color: #0580C1; font-weight: 600; text-decoration: none;">+91 9074 024 242</a>
              </p>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background-color: #F8FAFC; border-top: 1px solid #E2E8F0; padding: 25px 35px; text-align: center; font-size: 12px; line-height: 1.6; color: #94A3B8;">
              <p style="margin: 0 0 6px; font-weight: 600; color: #64748B;">All-Land Consultancy — Head Office Aluva</p>
              <p style="margin: 0 0 6px;">Laxmanas Tower, 11/56, Pump Junction, Opp. Municipal Office, Periyar Nagar, Aluva, Kerala 683101</p>
              <p style="margin: 0;">Email: <a href="mailto:alllandtravelsenquiry@gmail.com" style="color: #0580C1; text-decoration: none;">alllandtravelsenquiry@gmail.com</a> | Website: <a href="https://alllandconsultancy.com" style="color: #0580C1; text-decoration: none;">alllandconsultancy.com</a></p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>

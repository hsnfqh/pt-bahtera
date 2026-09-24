<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran / Berkas Pelaut Baru</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #F1F5F9;
            margin: 0;
            padding: 20px;
            color: #1E293B;
        }
        .container {
            max-width: 650px;
            margin: 0 auto;
            background: #FFFFFF;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border: 1px solid #E2E8F0;
        }
        .header {
            background: linear-gradient(135deg, #061838 0%, #0A295C 100%);
            padding: 30px;
            color: #FFFFFF;
            text-align: center;
            border-bottom: 4px solid #FFB800;
        }
        .header h1 {
            margin: 0;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .header p {
            margin: 6px 0 0 0;
            font-size: 13px;
            color: #94A3B8;
        }
        .content {
            padding: 30px;
        }
        .badge {
            display: inline-block;
            background: #FEF3C7;
            color: #92400E;
            font-weight: 800;
            font-size: 12px;
            padding: 4px 12px;
            border-radius: 20px;
            margin-bottom: 20px;
            border: 1px solid #FDE68A;
        }
        .ref-box {
            background: #F8FAFC;
            border: 2px dashed #CBD5E1;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 25px;
            text-align: center;
        }
        .ref-title {
            font-size: 11px;
            text-transform: uppercase;
            color: #64748B;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .ref-code {
            font-size: 20px;
            font-weight: 900;
            color: #061838;
            letter-spacing: 2px;
            margin-top: 4px;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }
        .info-table tr {
            border-bottom: 1px solid #F1F5F9;
        }
        .info-table td {
            padding: 12px 6px;
            font-size: 14px;
            vertical-align: top;
        }
        .info-table td.label {
            width: 35%;
            font-weight: 700;
            color: #475569;
        }
        .info-table td.value {
            width: 65%;
            font-weight: 600;
            color: #0F172A;
        }
        .message-box {
            background: #F8FAFC;
            border-left: 4px solid #0852A5;
            padding: 15px;
            border-radius: 0 10px 10px 0;
            font-size: 13.5px;
            line-height: 1.6;
            color: #334155;
            margin-bottom: 25px;
        }
        .attachment-alert {
            background: #ECFDF5;
            border: 1px solid #A7F3D0;
            color: #065F46;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        .footer {
            background: #061838;
            color: #94A3B8;
            padding: 20px;
            text-align: center;
            font-size: 12px;
        }
        .footer strong {
            color: #FFFFFF;
        }
        .btn-reply {
            display: inline-block;
            background: #0852A5;
            color: #FFFFFF !important;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 13px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>PT. BAHTERA ANUGERAH SENTOSA</h1>
            <p>Pemberitahuan Pendaftaran Pelaut / Pesan Masuk Website</p>
        </div>

        <!-- Content -->
        <div class="content">
            <span class="badge">&bull; FORMULIR WEBSITE ONLINE</span>

            <div class="ref-box">
                <div class="ref-title">Nomor Referensi Pendaftaran</div>
                <div class="ref-code">{{ $data['ref'] ?? 'BAS-ONLINE' }}</div>
            </div>

            <table class="info-table">
                <tr>
                    <td class="label">Nama Lengkap:</td>
                    <td class="value"><strong>{{ $data['name'] }}</strong></td>
                </tr>
                <tr>
                    <td class="label">Alamat Email:</td>
                    <td class="value">
                        <a href="mailto:{{ $data['email'] }}" style="color: #0852A5; text-decoration: none; font-weight: bold;">
                            {{ $data['email'] }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="label">No. Telepon / WhatsApp:</td>
                    <td class="value">
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $data['phone']) }}" style="color: #059669; text-decoration: none; font-weight: bold;" target="_blank">
                            {{ $data['phone'] }} (Chat WhatsApp)
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="label">Kategori Pelamar:</td>
                    <td class="value">
                        <span style="background: #E0E7FF; color: #3730A3; padding: 3px 8px; border-radius: 6px; font-size: 12px; font-weight: bold;">
                            {{ $data['crew_type'] }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="label">Alamat Domisili:</td>
                    <td class="value">{{ $data['address'] }}</td>
                </tr>
                <tr>
                    <td class="label">Waktu Pengiriman:</td>
                    <td class="value">{{ date('d M Y, H:i') }} WIB</td>
                </tr>
            </table>

            <div style="font-weight: 700; font-size: 13px; color: #475569; margin-bottom: 8px;">Pesan / Rincian Pengalaman:</div>
            <div class="message-box">
                {!! nl2br(e($data['message'] ?? 'Tidak ada pesan tambahan.')) !!}
            </div>

            @if(isset($data['has_file']) && $data['has_file'])
                <div class="attachment-alert">
                    📎 Berkas lampiran PDF pelaut disertakan dalam email ini ({{ $data['original_filename'] ?? 'Dokumen PDF' }}).
                </div>
            @endif

            <div style="text-align: center; margin-top: 25px;">
                <a href="mailto:{{ $data['email'] }}?subject=Re:%20Pendaftaran%20Pelaut%20PT.%20Bahtera%20Anugerah%20Sentosa%20[{{ $data['ref'] }}]" class="btn-reply">
                    Balas Email Pelamar Langsung &rarr;
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <strong>PT. BAHTERA ANUGERAH SENTOSA</strong><br>
            SIUKAK No. 58.58-R/2024 &bull; SIUPPAK No. 65.21/2016<br>
            Email ini dikirim secara otomatis melalui formulir website resmi PT. BAS.
        </div>
    </div>
</body>
</html>

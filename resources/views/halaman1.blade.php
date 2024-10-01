<!doctype html>
<html lang ="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-widht, initial-scale=1.0" />
        <title>PW4 - HALAMAN 1 - 220711934</title>>

        <style>
            img {
                width: 150px;
            }
            legend{
                font-size: 30px;
            }
            td,
            th{
                padding: 5px;
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        <ul style="list-style-type: square">
            <li><a href="{{ url('halaman1')}}">Page 1</a></li>
            <li><a href="{{ url('halaman2')}}">Page 2</a></li>
        </ul>
        <fieldset>
            <legend>Profil</legend>
            <hr style="border: dotte" />
            <table style="width: auto; margin: 0 auto">
                <tr>
                    <th colspan="5">Kontak Orang Keren</th>
                </tr>

                <tr>
                    <th>Photo</th>
                    <th>Nama</th>
                    <th>Telp</th>
                    <th>Tanggal lahir</th>
                </tr>

                <tr>
                    <td>
                        <img src="{{asset('images/anjes.jpg')}}" alt="ini gambar 1.1"/>
                    </td>
                    <td>I Putu Anjes Vernanda-220711934</td>
                    <td>087860919052</td>
                    <td>03-03-2004</td>
                </tr>
            </table>
        </fieldset>        
    </body>    
</html>
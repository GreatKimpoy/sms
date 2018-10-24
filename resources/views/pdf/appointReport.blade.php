<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MIDSOUTH SERVICES TECH. CORP. | APPOINTMENT REPORT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style type="text/css">
        @page{
            margin-top: 1cm;
            margin-bottom: 0.25cm;
        }
        body{
            font-family: "SegoeUI","Sans-serif";
            font-size: 12px;
        }
        .header{
            font-size: 20px!important;
        }
        .page-break {
            page-break-after: always;
        }
        .center{
            text-align: center;
        }
        .col-md-12{
            width: 100%;
        }
        .col-md-6{
            width: 50%;
        }
        .border{
            border: 1px solid black;
        }
        .text-right{
            text-align: right;
        }
        table{
            clear: both;
            border: 1px solid black
        }
        tbody tr{
            border: 1px solid black;
        }
        tr:nth-child(even) {
            background-color: #e6e6e6
        }
        thead th{
            background-color: black;
            color: white;
        }
        .footer{
            position: absolute;
            bottom: 0;
        }
        .footerd{
            font-size: 0.8em;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
    <body>
        <div class="center header">
          <img src="{{asset ('dist/img/midsouth.png')}}" class="img-circle" width="30" >  MIDSOUTH TECHNICAL SERVICES CORPORATION
        </div><br>
        <div style="clear:both"></div>
        <div class="col-md-12 border center">
            APPOINTMENT REPORT
        </div><br>
        <div style="float:left"  class="col-md-6">
            Total of {{count($job)}} records
        </div>
        <div style="float:right"  class="col-md-6">
            Date as of: {{$date}}
        </div>
        <div style="clear:both"></div>
        <br>
        <table width="100%">
              <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Customer</th>
                        <th>Appointment Date</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($appointment as $appoint)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$appoint->customer}}</td>
                                <td>{{$appoint->AppointmentDate}}</td>
                            </tr>

                        @endforeach
                </tbody>
        </table>
    </body>
</html>
@extends('layouts.hr3-admin')

@section('title')
    Information
@endsection

@section('header')
    <h1 class="text-3xl font-bold">Information</h1>
    <h5 class="text-blue-500">Information</h5>
@endsection

@section('content')

<html>
<head>
    <title>Employee Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e9f3ff;
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }
        .header .profile {
            display: flex;
            align-items: center;
        }
        .header .profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .header .profile .name {
            font-size: 20px;
            font-weight: bold;
        }
        .header .profile .ssn {
            font-size: 14px;
            color: #333;
        }
        .header .profile .links {
            font-size: 14px;
            color: #007bff;
            margin-top: 5px;
        }
        .header .profile .links a {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }
        .header .details {
            text-align: right;
        }
        .header .details div {
            margin-bottom: 5px;
        }
        .header .details .termed {
            background-color: #ff4d4d;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .section {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .section .box {
            width: 32%;
            background-color: #e9f3ff;
            padding: 20px;
            border-radius: 5px;
        }
        .section .box h3 {
            background-color: #0056b3;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin: -20px -20px 20px -20px;
        }
        .section .box .content {
            font-size: 14px;
        }
        .section .box .content div {
            margin-bottom: 10px;
        }
        .section .box .content div span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="profile">
                <img src="https://storage.googleapis.com/a1aa/image/LiinbxXNfz1CH6ufVKFWhpGEp1XhDLU8LtKY91UNe1eEWvNOB.jpg" alt="Profile Picture" width="50" height="50">
                <div>
                    <div class="name">HECTOR MAGTANGGOL aka. anak ni tanggol</div>
                    <div class="ssn">View SSN: 744-19-2389</div>
                    <div class="links">
                        <a href="#">Eligibility Group</a>
                        <a href="#">PPACA</a>
                    </div>
                </div>
            </div>
            <div class="details">
                <div>EUID: HG11957</div>
                <div>Job Code: 0890153</div>
                <div>Job Description: GROCERY WHSE/ORDER SELECTOR</div>
                <div>Division No.: 796</div>
                <div>Location: 796 - Layton Distribution Center &gt; W0796</div>
            </div>
        </div>
        <div class="section">
            <div class="box">
                <h3>Address Information</h3>
                <div class="content">
                    <div><span>Address:</span> 540 W 1425 N, APT 598 R</div>
                    <div><span>City:</span> LAYTON</div>
                    <div><span>State:</span> UT</div>
                    <div><span>Zip Code:</span> 84041</div>
                    <div><span>Tel No.:</span> 801-695-3328</div>
                </div>
            </div>
            <div class="box">
                <h3>Important Dates</h3>
                <div class="content">
                    <div><span>Current Hire Date:</span> 07/25/2022</div>
                    <div><span>Original Hire Date:</span> 07/25/2022</div>
                    <div><span>Term Date:</span> 08/31/2022</div>
                    <div><span>Term Enter:</span> 09/01/2022</div>
                    <div><span>LOA Start Date:</span></div>
                    <div><span>LOA End Date:</span></div>
                    <div><span>Birth Date:</span> 05/03/2002</div>
                    <div><span>Age:</span> 20</div>
                </div>
            </div>
            <div class="box">
                <h3>Payment Information</h3>
                <div class="content">
                    <div><span>Employee Status:</span> 1</div>
                    <div><span>Standard Work Week:</span> 40.00</div>
                    <div><span>Pay Type/Code:</span> 2</div>
                    <div><span>Pay Frequency:</span> 1 - Weekly</div>
                    <div><span>Annual Salary:</span> $44,283.20</div>
                    <div><span>Term Reason:</span> 68 - TERM PROB PERIOD</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
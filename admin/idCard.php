<?php
include "include/config.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sqlIid="select * from students where id='$id'";
    $result=mysqli_query($conn,$sqlIid);
    $student=mysqli_fetch_assoc($result);
    //print_r($student);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student ID Card</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
        }
        .id-card {
            width: 300px; /* Width of the ID card */
            height: 500px; /* Height of the ID card */
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .id-card header {
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        .id-card header h1 {
            margin: 0;
            font-size: 1.5em;
        }
        .id-card .logo {
            text-align: center;
            margin: 10px 0;
        }
        .id-card .logo img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
        .id-card .details {
            padding: 20px;
            text-align: center;
        }
        .id-card .details img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .id-card .details h2 {
            margin: 10px 0;
            font-size: 1.2em;
            color: #333;
        }
        .id-card .details p {
            margin: 5px 0;
            color: #555;
        }
        .id-card .details .info {
            text-align: left;
            margin-top: 20px;
        }
        .id-card .details .info p {
            margin: 8px 0;
            font-size: 0.9em;
        }
        .id-card .details .info .label {
            font-weight: bold;
            color: #007bff;
        }
        .id-card .details .barcode {
            text-align: center;
            margin-top: 20px;
        }
        .id-card .details .barcode img {
            width: 150px;
        }
        .id-card .address {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 0.9em;
            color: #333;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .download-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="id-card" id="idCard">
        <header>
            <h1>Balaji Academy </h1>
        </header>
        <div class="logo">
            <img src="https://balajiacademygkp.com/img/balaji.png" alt="School Logo">
        </div>
        <div class="details">
            <img src="image/<?php echo $student['image']?>" alt="Student Photo">
            <h2><?php echo $student['name']?></h2>
            <p>Class: <?php echo $student['course']?></p>
            <p>Date of Birth: <?php echo $student['dob']?></p>
            <div class="info">
                <p><span class="label">Roll No:</span> BJAG<?php echo $student['id']?></p>
                <p><span class="label">Enroll:</span> <?php echo $student['enrollement']?></p>
            </div>
           
        </div>
        <div class="address">
          Civil Lines Golghar Gorakhpur 273001
        </div>
    </div>
    <div class="button-container">
        <button class="download-button" onclick="downloadIDCard('png')">Download PNG</button>
        <button class="download-button" onclick="downloadIDCard('pdf')">Download PDF</button>
    </div>

    <!-- Include html2canvas library -->
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
    <!-- Include jsPDF library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script>
        function downloadIDCard(format) {
            const idCard = document.getElementById('idCard');
            html2canvas(idCard).then(canvas => {
                if (format === 'png') {
                    const link = document.createElement('a');
                    link.href = canvas.toDataURL('image/png');
                    link.download = '<?php echo $student['name']?>_balajiIdCard.png';
                    link.click();
                } else if (format === 'pdf') {
                    const { jsPDF } = window.jspdf;
                    const pdf = new jsPDF('p', 'pt', [canvas.width, canvas.height]);
                    const imgData = canvas.toDataURL('image/png');
                    pdf.addImage(imgData, 'PNG', 0, 0, canvas.width, canvas.height);
                    pdf.save('<?php echo $student['name']?>_balajiIdCard.pdf');
                }
            });
        }
    </script>
</body>
</html>

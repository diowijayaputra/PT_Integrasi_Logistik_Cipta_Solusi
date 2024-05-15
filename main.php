<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="row"></div>
</body>

</html>

<script>
    var andi = ["Andi", true, false, true, true, false];
    var maya = ["Maya", false, false, false, true, true];
    var budi = ["Budi", true, false, true, false, true];
    var asih = ["Asih", true, true, true, true, false];
    var raja = ["Raja", false, false, true, true, true];
    var result = [];

    participantData(andi);
    participantData(maya);
    participantData(budi);
    participantData(asih);
    participantData(raja);

    function participantData(participant) {
        var count = 0;

        for (var i = 1; i <= participant.length; i++) {
            if (i == 1 && participant[i] == true) {
                count = count + 10;
            } else if (i == 2 && participant[i] == true) {
                count = count + 30;
            } else if (i == 3 && participant[i] == true) {
                count = count + 20;
            } else if (i == 4 && participant[i] == true) {
                count = count + 20;
            } else if (i == 5 && participant[i] == true) {
                count = count + 20;
            }
        }

        result.push(participant[0]);
        result.push(count);
    }

    console.log(result);

    function participantResult() {
        var html = `<div class="col-6">NAMA</div>
                    <div class="col-6">SKOR</div>`;

        $(".row").append(html);

        for (var j = 0; j < result.length; j++) {
            var html2 = `<div class="col-6">` + result[j] + `</div>`;
            $(".row").append(html2);
        }
    }

    participantResult()
</script>
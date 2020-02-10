<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#confirm").click(function() {
                var roomname = $("#roomname");
                var topic = $("#topic");
                if (roomname.val() == "") {
                    alert("Please enter roomname or click generate to generate your room name.");
                } else if (roomname.val().length < 4 || roomname.val().length > 12) {
                    alert("Your Room name is incorrect.your room name is at least 4 characters and 12 characters max");
                } else if (topic.val() == "") {
                    alert("Please enter subject or topic.");
                }
            });
        });

    </script>
    <style>
        input[type=text] {
            width: 30%;
            height: 24px;
            font-size: 28px;
        }

        textarea[name=description] {
            resize: none;
            height: 250px;
            width: 40%;
        }

    </style>
</head>

<body>
    <form method="post" action="add_db.php" enctype="multipart/form-data">
        <p class="subhead1">Add new room</p>
        <p class="subhead2">Roomname</p>
        <p class="subDetail1">At least 4 characters and 12 characters max.</p>
        <input type="text" name="roomname" id="roomname" class="input_bar">
        <p class="subhead2">Subject/Topic</p>
        <input type="text" name="topic" id="topic" class="input_bar">
        <p class="subhead2">Upload file</p>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <p class="subhead2">Description</p>
        <textarea name="description"></textarea><br><br>
        <button id="confirm" type="submit" name="confirm" class="button_default">Confirm</button>
        <button type="submit" name="back" class="button_grey">back</button>
    </form>
</body>

</html>

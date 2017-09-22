<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

    <form name="insertForm">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Nama Anda"/></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Insert Data" onclick="return submitInsert()"/>
                </td>
            </tr>
        </table>
    </form>

</body>
    <script type="text/javascript">
        /*
        method="POST" action="../back-end/insert.php"
         */

        function submitInsert(){
            var nama =document.insertForm.nama.value;


            if(nama === '' || nama ===undefined){
                alert('Field Nama Masih Kosong');
                return false;
            }else{
                document.insertForm.method = "POST";
                document.insertForm.action = "../back-end/insert.php";
            }

        }


    </script>
</html>
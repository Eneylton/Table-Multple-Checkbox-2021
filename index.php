<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
     $(document).ready(function(){
         $("#form1 #select-all").click(function(){
            $("#form1 input[type='checkbox']").prop('checked',this.checked);
         });
     });
    </script>
    <title>Multiplo Checkbox</title>
</head>

<body>

    <div class="container">
        <h2>Tabela com multiplo checkbox</h2>
        <p>Sem Banco de Dados ...</p>

        <form action="index.php" method="post" id="form1">

            <table class="table table-striped">
                <thead>
                    <tr colspan="3">
                        <button type="submit" name="submit" class="btn btn-primary" >Enviar</button>

                    </tr>
                    <tr>
                        <th><input type="checkbox" value="" id="select-all"></th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" value="" id="" name="check" value="valor1"></td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" value="" id="" name="check" value="valor2"></td>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" value="" id="" name="check" value="valor3"></td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                </tbody>
            </table>


        </form>

    </div>

</body>

</html>
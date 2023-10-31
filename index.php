<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
        Avatar alterado com sucesso!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Insira seu nick de usuário</h2>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <img id="avatar" src="https://minotar.net/helm/steve/100.png" class="img-thumbnail">
                <input type="text" id="username" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="updateAvatar()">Salvar</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        function openModal() {
            document.getElementById('modal').style.display = "block";
        }

        function updateAvatar() {
            var username = document.getElementById('username').value;
            document.getElementById('avatar').src = "https://minotar.net/helm/" + username + "/100.png";
            document.getElementById('modal').style.display = "none";
            document.getElementById('alert').style.display = "block";
        }
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>HTD APP Gateway</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/main-logo.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
</head>
<body style="min-height:auto;">
	<div class="container">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-6 col-lg-4 mx-auto">
                <div class="card full-height">
                    <div class="card-body">
                        <center>
                            <img src="assets/img/main-logo.png" width="150px" height="100px" alt="logo" style="object-fit:cover;">
                        </center>
                        <div class="card-title text-center">Masukkan Token Aplikasi Anda</div>

                        <form action="" method="post" onsubmit="return false">
                            <div class="form-group">
                                <input type="text" name="token" id="token" class="form-control mb-2" placeholder="Token Disini...">
                                <button class="btn btn-primary btn-block btn-round btn-submit" onclick="submitForm()">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    var localToken = window.localStorage.getItem('token')
    
    if(localToken) init(localToken)

    function init(token)
    {
        var gw_type = '<?=$gw_type?>';
        var formData = new FormData;
        formData.append('token',token)
        formData.append('note',gw_type)
        fetch('index.php?r=api/business/findByToken',{
            method:'POST',
            body:formData
        })
        .then(res => res.json())
        .then(res => {
            if(res.status == 'success')
            {
                document.querySelector('.btn-submit').innerHTML = 'Berhasil'
                window.localStorage.setItem('token',res.data.token)
                window.location = res.data.business_url
            }
            else
            {
                alert('Bisnis tidak ditemukan')
            }
        })
    }

    function submitForm()
    {
        var _token = document.querySelector("#token").value
        if(_token) init(_token)
    }
    </script>
</body>
</html>
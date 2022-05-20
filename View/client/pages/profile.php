<style type="text/css">
    p{
        cursor: pointer;
    }
    .actived{
        background-color: white;
    }
</style>
<body>
    <div class="container">
    <div class="row " style="margin-top: 50px; margin-left: 30px;margin-bottom: 30px">
        <div class="col-2" >
            <p id="profile" class="actived" onclick="change(this.id);">Thông tin cá nhân</p>
            <p id="wallet" onclick="change(this.id)">Ví cân nhân</p>
            <p id="history" onclick="change(this.id);">Lịch sử giao dịch</p>
            <p id="manage" onclick="change(this.id);">Quản Lí tin</p>
        </div>
        <div class="col-1"></div>
        <div class="col-7" id="in4" >
            <div class="profile">
                <label>Họ và tên</label>
                <input type="text" name="">
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    function change(id) {
        var x = document.getElementById(id);
        var y = document.getElementById('in4');
        $('.actived').toggleClass('actived');
        switch(id){
            case'wallet': y.innerHTML = `<?php require 'wallet.php'; ?>`;
            break;
            case'manage': y.innerHTML = `<?php require 'manage.php'; ?>`;
            break;
        }
        x.className = "actived";

    }
</script>
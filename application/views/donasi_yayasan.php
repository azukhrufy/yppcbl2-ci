<?php
$this->load->view('base/header');
?>

    <!--Page title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
        <div class="container">
            <h1>Donasi Yayasan</h1>
        </div>
    </section>
    <div class="bread-crumb">
        <div class="container">
            <ul class="clearfix">
                <li><a href="<?php echo site_url('home') ?>"><span class="fa fa-home"></span>Home</a></li>
                <li class="active">Donasi Yayasan</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Informasi Donasi</h2>
            </div>

            <h4>kami akan langsung mengolahnya untuk yang membutuhkan</h4>

            <form  action="<?php echo base_url() ?>donasi/pembayaran" class="donate-form default-form" method="post">
                <ul class="chicklet-list clearfix">
                    <li class="other-amount">
                        <div class="input-container" data-message="Every dollar you donate helps end hunger."><input type="text" id="other-amount" name="amount" placeholder="Contoh : 100000"  />
                        </div>
                    </li>
                </ul>

                <h3>Donor Information</h3>

                <div class="form-bg">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <p>Nama Donatur*</p>
                                <?php if($this->session->userdata('status') == 'LOGIN'){

                                 ?>
                                <input type="text" name="fname" value="<?=$this->session->userdata('nama')?>" id="fname">Hide Identity : Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"> No <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck">
                                <input type="hidden" name="hiden-name" id="fname-hidden" value="<?=$this->session->userdata('nama')?>">
                                 <?php }else{
                                  ?>
                                <span><i> <h4> <font color="red"> Anda Belum Melakukan Login </font> </h4> </i></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="payment-option">
                    <li>
                        <label>Choose your payment method:</label>
                        <select class="" name="payment">
                            <option value="BCA KCU DAGO">BCA KCU DAGO</option>
                            <option value="NIAGA RUPIAH">NIAGA RUPIAH</option>
                            <option value="NIAGA DOLAR">NIAGA DOLAR</option>
                        </select>
                        <br>

                    </li>
                    
                </ul>

                <div class="center">
                    <?php  if($this->session->userdata('status') == 'LOGIN'){ ?>
                        <div class="center"><input type="submit" class="theme-btn btn-style-one" value="Donate Now"></div>
                    <?php  }else{ ?>
                        <span>Untuk Melakukan Donasi Silahkan Login Terlebih Dahulu</span>
                        <br>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#mylogin">LOGIN</a>
                    <?php } ?>
                </div> 
            </form>
        </div>
    </div> 


    <!-- Call To Action -->
    <section class="subscribe-section" style="background-image: url(images/background/4.jpg)">
        <div class="container">
            <div class="row">
                <div class="title-column col-lg-8">
                    <h2>Subscribe to Newsletter</h2>
                    <div class="text">Sed do eiusmod tempor incididunt ut laboret dolore magna aliqua enim nostrud</div>
                </div>
                <div class="subscribe-form col-lg-4">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Your email..." required="">
                            <button type="submit" class="theme-btn"><span class="fa fa-paper-plane"></span></button>
                        </div>
                    </form>
                </div>
            </div>                    
        </div>
    </section>
    <script type="text/javascript">
        function yesnoCheck() {
            var data = document.getElementById("fname-hidden").value;
            if (document.getElementById('yesCheck').checked) {
                document.getElementById('fname').value = 'Annonymous Donatur';
            }
            else{
                document.getElementById('fname').value = data;
            }
        }
    </script>

<?php
$this->load->view('base/footer');
?>
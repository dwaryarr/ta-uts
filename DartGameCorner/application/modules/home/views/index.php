<div class="container mt-5">
    <div class="row-lg mt-5">
        <center>
            <h2>
                Welcome to the Home Page, <?= $nama; ?>!</h2>
        </center>
    </div>
    <div class="row mt-5">
        <?php if ($this->session->flashdata('flash')) {
            echo '<p class="warning" style="margin: 10px 20px;">' . $this->session->flashdata('flash') . '</p>';
        } ?>
        <?php foreach ($products as $row) : ?>
            <div class="col-md-3 mb-5">
                <div class="card-group">
                    <div class="card bg-light cardmovie h-100" style="border :none" data-aos="zoom-out-up" data-aos-offset="250" data-aos-duration="1000">
                        <a href="<?= base_url(); ?>home/detail/<?= $row['id_produk']; ?>" class="text-decoration-none">
                            <img src="<?= base_url('assets/images/produk/') . $row['gambar']; ?>" class="card-img-top image-resize rounded">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row["nama_produk"]; ?></h5>
                            </div>
                        </a>
                        <div class="card-text text-muted ms-2 ket">
                            <h6><?= $row["keterangan"]; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?= $this->pagination->create_links(); ?>
    </div>
</div>
<a id="myBtn" class="btn btn-info" href="<?= base_url(); ?>home/cekorder">Cek Proses Order!</a>

<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 14277870;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/14277870/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

<!-- Cek Order -->
<script>
    var mybutton = document.getElementById("myBtn");
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };
    mybutton.style.display = "block"; // Show the button

    // function scrollFunction() {
    //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //         mybutton.style.display = "block";
    //     } else {
    //         mybutton.style.display = "none"; //none
    //     }
    // }
</script>

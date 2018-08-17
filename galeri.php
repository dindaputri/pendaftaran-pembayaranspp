<style type='text/css'>
.slide {
position:relative;
margin:0 auto;
width:1000px;
height:490px;
overflow:hidden
}

.slide input {
display:block;
position:absolute;
width:960px;
height:450px;
left:0;
top:0;
opacity:0;
cursor:pointer;
margin:0;
padding:0
}

.slide img {
visibility:hidden;
opacity:0;
height:450px;
position:absolute;
left:0;
top:0;
width:960px;
border:20px solid #ddd;
border-radius:20px;
transition:all .5s ease-out
}

.slide input:checked + img {
visibility:visible;
opacity:1
}

.slide input:checked { display:none }

.slide input:nth-child(1) { z-index:13 }
.slide input:nth-child(3) { z-index:12 }
.slide input:nth-child(5) { z-index:11 }
.slide input:nth-child(7) { z-index:10 }

.slide input:nth-child(1):checked ~ input:nth-child(3),
.slide input:nth-child(3):checked ~ input:nth-child(5),
.slide input:nth-child(5):checked ~ input:nth-child(7) { z-index:15 }
</style>
<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-desktop desktop-icon'></i>
								<a href='#'>Galeri</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class='page-content'>
						<div class='row'>
							<div class='col-xs-12'>
								<!-- PAGE CONTENT BEGINS -->
								<div class='widget-box'>
											<div class='widget-header'>
												<h4 class='smaller'>Halaman Galeri</h4>
											</div>

											<div class='widget-body'>
												<div class='widget-main'>
												<div class='slide'>
  <input type='radio' name='radio-set' checked='checked' />
  <img src='images/2.jpg'/>

  <input type='radio' name='radio-set' />
  <img src='images/22.jpg'/>

  <input type='radio' name='radio-set' />
  <img src='images/44.jpg'/>

  <input type='radio' name='radio-set' />
  <img src='images/5.jpg'/>
</div>
												</div>
											</div>
										</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>				
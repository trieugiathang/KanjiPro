@extends('index');
<title>漢字詳細</title>
<link rel="stylesheet" type="text/css" href="{{ URL::to('template/assets/css/card.css') }}"> 
<link rel="stylesheet" type="text/css" href="{{ URL::to('template/app-assets/vendors/css/ui/prism.min.css') }}">
<link rel='stylesheet prefetch' href="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css') }}" >


<style type="text/css">


.kango {
    font-size: 2em;
    font-stretch: initial;
    color: #9b9b9e;
    font-weight: bold;
}

.kanji{
    font-size: 4em;
    font-weight: bold;
    text-align: center;
    padding-left: 150px;
    padding-right: 30px;
}


.comment-box{
border: none;
padding: 5px;
width: auto;
height: 250px;
overflow: scroll;
}

/* Scrollbar styles */
::-webkit-scrollbar {
width: 8px;
height: 8px;
}

::-webkit-scrollbar-track {
box-shadow: inset 0 0 10px #cccccc;
border-radius: 10px;
}

::-webkit-scrollbar-thumb {
border-radius: 10px;
background: #cccccc; 
box-shadow: inset 0 0 6px #cccccc; 
}

::-webkit-scrollbar-thumb:hover {
background: #cccccc;
}

.strike{
	font-size: 14px;
    font-weight: bold;
    color: #333333;
	font-style: italic;
}

.strike:hover{
    color: blue;
}


.example-vn{
	color:#3f3f3f;
}

.onyomi{
	color: #333333;
    padding-right: 20px;
    font-size: 14px;
    font-weight: bold;
}

.kanji-word{
	font-size: 1.8em;
    text-align: center;
    font-weight: bold;
    color: #333333;

}

.kanji-title{

    color: #333333;

}

.kanji-yomikata {
    text-align: center;
    font-size: 13px;
    font-weight: initial;
    font-style: italic;
    color: #4a4545;
    margin-top: -20px;
}



.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 0rem;
    margin-bottom: -1px;
    background-color: #fff;
    border-bottom: 1px solid #ddd;
	border-top: 1px solid #ddd;
}


.no-bg{
    background: none !important;
    border: none !important;
    box-shadow: none !important;
}

.seemore{
    text-align: right;
}

</style>



@section('content')
<!--body header-->
<!-- content-body -->
<div class="content-body">
<section id="thin-headings" class="row">
    <div class="card border-grey border-lighten-2">
        <div class="card-header">
			<h4 class="card-title">漢字の詳細</h4>
			<div class="heading-elements">
				<ul class="list-inline mb-0">
					<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
				</ul>
			</div>
		</div>
        <div class="card-body collapse in">
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <img class="img-fluid" src="{{ URL::to('template/assets/images/test/portfolio-1.jpg') }}">
                        <ul class="list-inline mb-1">
                            <li class="pr-1">
								<a id="like" class="btn btn-small btn-block btn-shared btn-favorite">
									<span class="fa fa-star pull-left"></span>ブックマークに追加
								</a>
							</li>
						</ul>
						<!--remember box-->
						<div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
							<div class="card">
								<div >
									<div class="card-body">
										<div class="card-block">
											<div class="comment-box">
												<div class="comment-block">
													<p class="mb-0">親は木の上に立って自分の遊んでいる子供を見る木の上に立って自分の遊んでいる子供を見る木の上に立って自分の遊んでいる子供を見る</p>
													<footer class="blockquote-footer floatright">
														<cite title="Source Title">triegiathangさん</cite>
													</footer>
													<ul class="list-inline mb-1">
														<li class="pr-1"><a href="#" class="text-muted">6<span class="icon-point-up"></span></a></li>
														<li class="pr-1"><a href="#" class="text-muted">1<span class="icon-point-down"></span></a></li>
													</ul>
												</div>
												<div class="comment-block">
													<p class="mb-0">親は木の上に立って自分の遊んでいる子供を見る</p>
													<footer class="blockquote-footer floatright">
														<cite title="Source Title">triegiathangさん</cite>
													</footer>
													<ul class="list-inline mb-1">
														<li class="pr-1"><a href="#" class="text-muted">6<span class="icon-point-up"></span></a></li>
														<li class="pr-1"><a href="#" class="text-muted">1<span class="icon-point-down"></span></a></li>
													</ul>
												</div>

												<div class="comment-block">
													<p class="mb-0">親は木の上に立って自分の遊んでいる子供を見る</p>
													<footer class="blockquote-footer floatright">
														<cite title="Source Title">triegiathangさん</cite>
													</footer>
													<ul class="list-inline mb-1">
														<li class="pr-1"><a href="#" class="text-muted">6<span class="icon-point-up"></span></a></li>
														<li class="pr-1"><a href="#" class="text-muted">1<span class="icon-point-down"></span></a></li>
													</ul>
												</div>
												<div class="comment-block">
													<p class="mb-0">親は木の上に立って自分の遊んでいる子供を見る</p>
													<footer class="blockquote-footer floatright">
														<cite title="Source Title">triegiathangさん</cite>
													</footer>
													<ul class="list-inline mb-1">
														<li class="pr-1"><a href="#" class="text-muted">6<span class="icon-point-up"></span></a></li>
														<li class="pr-1"><a href="#" class="text-muted">1<span class="icon-point-down"></span></a></li>
													</ul>
												</div>
												<div class="comment-block">
													<p class="mb-0">親は木の上に立って自分の遊んでいる子供を見る</p>
													<footer class="blockquote-footer floatright">
														<cite title="Source Title">triegiathangさん</cite>
													</footer>
													<ul class="list-inline mb-1">
														<li class="pr-1"><a href="#" class="text-muted">6<span class="icon-point-up"></span></a></li>
														<li class="pr-1"><a href="#" class="text-muted">1<span class="icon-point-down"></span></a></li>
													</ul>
												</div>
												<div class="comment-block">
													<p class="mb-0">親は木の上に立って自分の遊んでいる子供を見る</p>
													<footer class="blockquote-footer floatright">
														<cite title="Source Title">triegiathangさん</cite>
													</footer>
													<ul class="list-inline mb-1">
														<li class="pr-1"><a href="#" class="text-muted">6<span class="icon-point-up"></span></a></li>
														<li class="pr-1"><a href="#" class="text-muted">1<span class="icon-point-down"></span></a></li>
													</ul>
												</div>
											</div>
											<form class="form">
												<div class="form-body">
													<div class="form-group">
														<a data-toggle="collapse" data-parent="#accordionWrapa1" href="#accordion3" aria-expanded="false" aria-controls="accordion3">コメント欄</a>
														<a class="text-muted"  data-toggle="modal" data-target="#send-report" class="btn btn-secondary" data-placement="right" title="" >
															<span class="float-md-right d-xs-block d-md-inline-block icon-bullhorn"> 
														</a>
													</div>
													<div id="accordion3" role="tabpanel" aria-labelledby="heading3" class="card-collapse collapse" aria-expanded="false">
														<textarea id="donationinput7" rows="5" class="form-control square" name="comments" placeholder="comments"></textarea>
														<p class="clearfix"></p>
														<button type="submit" class="btn btn-secondary">
															<i class="icon-check2"></i> 送信
														</button>
													</div>
												</div>
											</form>

										</div>
									</div>
								</div>
							</div>
						</div><!--//remember box-->
                    </div>
                    <div class="col-lg-6 col-xs-12">
						<div class="card-block">
							<div class="media-list media-bordered">
								<div class="media">								

									<div class="media-body">
										<div>
											<span class="kanji">箱</span>
											<span class="kango">TICH</span>
										</div>
									</div>
								</div>
								<div class="media">								
									<span class="media-left">
										<i class="icon-chevron-right2"></i>
									</span>
									<div class="media-body">
										<span> 画数: </span>
										<a class="strike" href="{{asset('kanji/detail/')}}" > 12</a>
									</div>
								</div>
								<div class="media">								
									<span class="media-left">
										<i class="icon-chevron-right2"></i>
									</span>
									<div class="media-body">
										<span> JLPT : </span>
										<a class="strike" href="{{asset('kanji/detail/')}}" > N1</a>
									</div>
								</div>
								<div class="media">								
									<span class="media-left">
										<i class="icon-chevron-right2"></i>
									</span>
									<div class="media-body">
										<span>漢字検定 : </span>
										<a class="strike" href="{{asset('kanji/detail/')}}" > ５級</a>
									</div>
								</div>
								<div class="media">								
									<span class="media-left">
										<i class="icon-chevron-right2"></i>
									</span>
									<div class="media-body">
										<span> 学年 : </span>
										<a class="strike" href="{{asset('kanji/detail/')}}" > 小学生３年生</a>
									</div>
								</div>
								<div class="media">								
									<span class="media-left">
										<i class="icon-chevron-right2"></i>
									</span>
									<div class="media-body">
										<span> 話題 : </span>
										<a class="strike" href="{{asset('kanji/detail/')}}" > 第一章：世界</a>
										<i class="icon-android-arrow-forward"></i>
										<a class="strike" href="{{asset('kanji/detail/')}}" >  太陽 </a>
									</div>
								</div>
								<div class="media">								
									<span class="media-left">
										<i class="icon-chevron-right2"></i>
									</span>
									<div class="media-body">
										<span> 部首  : </span>
										<a class="strike" href="{{asset('kanji/detail/')}}" > 竹</a> ,
										<a class="strike" href="{{asset('kanji/detail/')}}" > 人</a> 
									</div>
									
								</div>
								<div class="media">								
									<span class="media-left">
										<i class="icon-chevron-right2"></i>
									</span>
									<div class="media-body">
										<span>Nghĩa : </span> Mới. Trong sạch. Mới. Tân [新] tên hiệu năm đầu của Vương Mãng [王莽] mới cướp ngôi nhà Hán [漢] 
									</div>
								</div>
								<div class="media">								
									<div class="media-body">
										<a data-toggle="modal" data-target="#addTagForm" class="text-muted"><span class="icon-price-tag"></span> タグ:</a>
										<a class="strike" href="{{asset('kanji/detail/')}}" > <span>nhat ky yeu nuoc</span></a> 
										,
										<a class="strike" href="{{asset('kanji/detail/')}}" > <span>nhat ky yeu nuoc</span></a> 
										,
										<a class="strike" href="{{asset('kanji/detail/')}}" > <span>nhat ky yeu nuoc</span></a> 
										,
										<a class="strike" href="{{asset('kanji/detail/')}}" > <span>nhat ky yeu nuoc</span></a> 
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>











<!--訓読み-->
<section id="thin-headings" class="row">
	<div class="text-muted float-xs-right info">
		<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#send-report" 
				data-placement="left" title="" data-original-title="Send comment to administrator">
			<span class="icon-bullhorn"></span>
		</button>
	</div>
	<h2 id="chapter1" class="content-header-title">訓読</h2>
	<hr>
    <div class="row match-height card-body collapse in">
		<div class="col-sm-12 col-md-8"><!--col-->
			<div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
    			<div class="card">
    				<div>
    					<div class="card-header">
                            <h4 class="card-title primary">訓読み：　<small class="text-muted">なおす、なおる</small></h4>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                    	<a data-toggle="modal" data-target="#send-report" type="button" class="btn btn-secondary" data-toggle="modal" data-placement="left" title="" data-original-title="Add new 述語">
                                    	<i class="icon-android-add"></i></a>
                                    </li>
                                    <li>
                                    	<a data-toggle="modal" data-target="#send-report" type="button" class="btn btn-secondary" data-toggle="modal" data-placement="left" title="" data-original-title="Add new 述語">
                                    	<i class="icon-bullhorn"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    					<div class="card-body">
    						<div class="card-block">
    							<div class="comment-box">
    								<div class="comment-block">
    									<span class="text-bold-700 text-xs-left info">直す</span><span class="font-small-3" >「なおす」：　</span>
    									<span class="text-bold-700 font-small-3 type-info" >Sua chua, sua</span>
    									<p class="mb-0 text-bold-500">親は木の上に立って自分の遊んでいる子供を見る</p>
    									<footer class="blockquote-footer floatright">
    										<cite title="Source Title">triegiathangさん</cite>
    									</footer>
    									<ul class="list-inline mb-1">
    										<li class="pr-1"><a href="#" class="text-muted">6<span class="icon-point-up"></span></a></li>
    										<li class="pr-1"><a href="#" class="text-muted">1<span class="icon-point-down"></span></a></li>
    									</ul>
    									<hr>
    								</div>
    								<div class="comment-block">
    									<span class="text-bold-700 text-xs-left info">直す</span><span class="font-small-3" >「なおす」：　</span>
    									<span class="text-bold-700 font-small-3 type-info" >Sua chua, sua</span>
    									<p class="mb-0 text-bold-500">親は木の上に立って自分の遊んでいる子供を見る</p>
    									<p class="mb-0 text-bold-100">Phu huynh dung tren cay nhin con cai choi</p>
    									<footer class="blockquote-footer floatright">
    										<cite title="Source Title">triegiathangさん</cite>
    									</footer>
    									<ul class="list-inline mb-1">
    										<li class="pr-1"><a href="#" class="text-muted">6<span class="icon-point-up"></span></a></li>
    										<li class="pr-1"><a href="#" class="text-muted">1<span class="icon-point-down"></span></a></li>
    									</ul>
    									<hr>
    								</div>
    								<div class="comment-block">
    									<span class="text-bold-700 text-xs-left info">直す</span><span class="font-small-3" >「なおす」：　</span>
    									<span class="text-bold-700 font-small-3 type-info" >Sua chua, sua</span>
    									<p class="mb-0 text-bold-500">親は木の上に立って自分の遊んでいる子供を見る</p>
    									<p class="mb-0 text-bold-100">Phu huynh dung tren cay nhin con cai choi</p>
    									<footer class="blockquote-footer floatright">
    										<cite title="Source Title">triegiathangさん</cite>
    									</footer>
    									<ul class="list-inline mb-1">
    										<li class="pr-1"><a href="#" class="text-muted">6<span class="icon-point-up"></span></a></li>
    										<li class="pr-1"><a href="#" class="text-muted">1<span class="icon-point-down"></span></a></li>
    									</ul>
    									<hr>
    								</div>
    								<div class="comment-block">
    									<span class="text-bold-700 text-xs-left info">直す</span><span class="font-small-3" >「なおす」：　</span>
    									<span class="text-bold-700 font-small-3 type-info" >Sua chua, sua</span>
    									<p class="mb-0 text-bold-500">親は木の上に立って自分の遊んでいる子供を見る</p>
    									<p class="mb-0 text-bold-100">Phu huynh dung tren cay nhin con cai choi</p>
    									<footer class="blockquote-footer floatright">
    										<cite title="Source Title">triegiathangさん</cite>
    									</footer>
    									<ul class="list-inline mb-1">
    										<li class="pr-1"><a href="#" class="text-muted">6<span class="icon-point-up"></span></a></li>
    										<li class="pr-1"><a href="#" class="text-muted">1<span class="icon-point-down"></span></a></li>
    									</ul>
    									<hr>
    								</div>
    								<div class="comment-block">
    									<span class="text-bold-700 text-xs-left info">直す</span><span class="font-small-3" >「なおす」：　</span>
    									<p class="mb-0 text-bold-100">Phu huynh dung tren cay nhin con cai choi</p>
    									<footer class="blockquote-footer floatright">
    										<cite title="Source Title">triegiathangさん</cite>
    									</footer>
    									<hr>
    								</div>
    							</div>
    							
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
		</div>
		<div class="col-xl-4 col-lg-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">関連語</h4>
					<div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                            	<a data-toggle="modal" data-target="#addKunyomiExample" type="button" class="btn btn-secondary" data-toggle="modal" data-placement="left" title="" data-original-title="Add new 述語">
                            	<i class="icon-android-add"></i></a>
                            </li>
                            <li>
                            	<a data-toggle="modal" data-target="#send-report" type="button" class="btn btn-secondary" data-toggle="modal" data-placement="left" title="" data-original-title="Add new 述語">
                            	<i class="icon-bullhorn"></i></a>
                            </li>
                        </ul>
                    </div>
				</div>
				<div class="card-body">
					<div class="card-block">
						<div class="nav-vertical">
							<ul class="nav nav-tabs nav-right" style="height: 102px;">
								<li class="nav-item">
									<a class="nav-link" id="baseVerticalRight-tab1" data-toggle="tab" aria-controls="tabVerticalRight1" href="#tabVerticalRight1" aria-expanded="false">近義</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="baseVerticalRight-tab2" data-toggle="tab" aria-controls="tabVerticalRight2" href="#tabVerticalRight2" aria-expanded="false">対義</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" id="baseVerticalRight-tab3" data-toggle="tab" aria-controls="tabVerticalRight3" href="#tabVerticalRight3" aria-expanded="true">同義</a>
								</li>
							</ul>
							<div class="tab-content px-1">
								<div role="tabpanel" class="tab-pane" id="tabVerticalRight1" aria-expanded="false" aria-labelledby="baseVerticalRight-tab1">
									<p class="icon-folder-o"><span class="text-bold-700" > Từ đồng nghĩa của 直る</span></p>
        							<ul class="list-style-square">
                                        <li><a href="" >絶</a>、 <a href="" >治る</a>、  <a href="" >直る</a></li>
                                    </ul>
								</div>
								<div class="tab-pane" id="tabVerticalRight2" aria-labelledby="baseVerticalRight-tab2" aria-expanded="false">
									<p class="icon-folder-o"><span class="text-bold-700" > Từ đồng nghĩa của 直る</span></p>
        							<ul class="list-style-square">
                                        <li><a href="" >訴える</a>、 <a href="" >与える</a>、  <a href="" >支える</a></li>
                                    </ul>
								</div>
								<div class="tab-pane active" id="tabVerticalRight3" aria-labelledby="baseVerticalRight-tab3" aria-expanded="true">
									<p class="icon-folder-o"><span class="text-bold-700" > Từ đồng nghĩa của 直る</span></p>
        							<ul class="list-style-square">
                                        <li><a href="" >絶</a></li>
                                        <li><a href="" >治る</a></li>
                                        <li><a href="" >直る</a></li>
                                    </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<!--述語-->
<section id="thin-headings" class="row">
	<div class="text-muted float-xs-right info">
		<span class="onyomi"> (ジョウ, ショウ, シャン)</span>
		<button data-toggle="modal" data-target="#addOnyomiExample" 
		       type="button" class="btn btn-secondary" data-toggle="tooltip" 
				data-placement="left" title="" data-original-title="Add new 述語">
			<span class="icon-android-add"></span>
		</button>
		<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#send-report"
				data-placement="left" title="" data-original-title="Send comment to administrator">
			<span class="icon-bullhorn"></span>
		</button>
	</div>
	<h2 id="chapter1" class="content-header-title">述語 </h2>
	<hr>
    <div class="row match-height">
		<!--card kanji-->
		<div class="col-sm-3 col-md-3">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">TUYỆT HẢO ĐIỀU</h4>
					<div class="heading-elements">
						<a data-toggle="modal" data-target="#addTagForm" 　id="add-tag" class="btn btn-lg">
						<span class="icon-android-add"></span>
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="card-block">
						<p class="kanji-word" ><a class="kanji-word" href="{{asset('word/detail/')}}"> 絶好調</a></p>
						<p class="kanji-yomikata">ぜっこうちょう</p>
					</div>
					<div class="card-block">
						<p class="kanji-remember">例文：　親は木の上に立って自分の遊んでいる子供を見る</p>
						<div class="heading-elements">
							<ul class="list-inline mb-0 stroke-part">
								<li><i class="icon-star"></i><a href="#" class="card-link">絶</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">好</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">調</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //card kanji-->
		
		<!--card kanji-->
		<div class="col-sm-3 col-md-3">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">TUYỆT HẢO ĐIỀU</h4>
					<div class="heading-elements">
						<a data-toggle="modal" data-target="#addTagForm"　id="add-tag" class="btn btn-lg">
						<span class="icon-android-add"></span>
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="card-block">
						<p class="kanji-word" ><a class="kanji-word" href="{{asset('word/detail/')}}"> 絶好調</a></p>
						<p class="kanji-yomikata">ぜっこうちょう</p>
					</div>
					<div class="card-block">
						<p class="kanji-remember">例文：　親は木の上に立って自分の遊んでいる子供を見る</p>
						<div class="heading-elements">
							<ul class="list-inline mb-0 stroke-part">
								<li><i class="icon-star"></i><a href="#" class="card-link">絶</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">好</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">調</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //card kanji-->
		<!--card kanji-->
		<div class="col-sm-3 col-md-3">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">TUYỆT HẢO ĐIỀU</h4>
					<div class="heading-elements">
						<a data-toggle="modal" data-target="#addTagForm"　id="add-tag" class="btn btn-lg">
						<span class="icon-android-add"></span>
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="card-block">
						<p class="kanji-word" ><a class="kanji-word" href="{{asset('word/detail/')}}"> 絶好調</a></p>
						<p class="kanji-yomikata">ぜっこうちょう</p>
					</div>
					<div class="card-block">
						<p class="kanji-remember">例文：　親は木の上に立って自分の遊んでいる子供を見る</p>
						<div class="heading-elements">
							<ul class="list-inline mb-0 stroke-part">
								<li><i class="icon-star"></i><a href="#" class="card-link">絶</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">好</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">調</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //card kanji-->
		<!--card kanji-->
		<div class="col-sm-3 col-md-3">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">TUYỆT HẢO ĐIỀU</h4>
					<div class="heading-elements">
						<a data-toggle="modal" data-target="#addTagForm"　id="add-tag" class="btn btn-lg">
						<span class="icon-android-add"></span>
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="card-block">
						<p class="kanji-word" ><a class="kanji-word" href="{{asset('word/detail/')}}"> 絶好調</a></p>
						<p class="kanji-yomikata">ぜっこうちょう</p>
					</div>
					<div class="card-block">
						<p class="kanji-remember">例文：　親は木の上に立って自分の遊んでいる子供を見る</p>
						<div class="heading-elements">
							<ul class="list-inline mb-0 stroke-part">
								<li><i class="icon-star"></i><a href="#" class="card-link">絶</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">好</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">調</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //card kanji-->
		
	</div>
	
	<!-- see more -->
	<div id="display-headings" class="card no-bg">
        <div class="card-body collapse" aria-expanded="false">
            <div class="row match-height">
        		<!--card kanji-->
        		<div class="col-sm-3 col-md-3">
        			<div class="card">
        				<div class="card-header">
        					<h4 class="card-title">TUYỆT HẢO ĐIỀU</h4>
        					<div class="heading-elements">
        						<a data-toggle="modal" data-target="#addTagForm" 　id="add-tag" class="btn btn-lg">
        						<span class="icon-android-add"></span>
        						</a>
        					</div>
        				</div>
        				<div class="card-body">
        					<div class="card-block">
        						<p class="kanji-word" ><a class="kanji-word" href="{{asset('word/detail/')}}"> 絶好調</a></p>
        						<p class="kanji-yomikata">ぜっこうちょう</p>
        					</div>
        					<div class="card-block">
        						<p class="kanji-remember">例文：　親は木の上に立って自分の遊んでいる子供を見る</p>
        						<div class="heading-elements">
        							<ul class="list-inline mb-0 stroke-part">
        								<li><i class="icon-star"></i><a href="#" class="card-link">絶</a></li>
        								<li><i class="icon-star"></i><a href="#" class="card-link">好</a></li>
        								<li><i class="icon-star"></i><a href="#" class="card-link">調</a></li>
        							</ul>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div><!-- //card kanji-->
        		<!--card kanji-->
        		<div class="col-sm-3 col-md-3">
        			<div class="card">
        				<div class="card-header">
        					<h4 class="card-title">TUYỆT HẢO ĐIỀU</h4>
        					<div class="heading-elements">
        						<a data-toggle="modal" data-target="#addTagForm" 　id="add-tag" class="btn btn-lg">
        						<span class="icon-android-add"></span>
        						</a>
        					</div>
        				</div>
        				<div class="card-body">
        					<div class="card-block">
        						<p class="kanji-word" ><a class="kanji-word" href="{{asset('word/detail/')}}"> 絶好調</a></p>
        						<p class="kanji-yomikata">ぜっこうちょう</p>
        					</div>
        					<div class="card-block">
        						<p class="kanji-remember">例文：　親は木の上に立って自分の遊んでいる子供を見る</p>
        						<div class="heading-elements">
        							<ul class="list-inline mb-0 stroke-part">
        								<li><i class="icon-star"></i><a href="#" class="card-link">絶</a></li>
        								<li><i class="icon-star"></i><a href="#" class="card-link">好</a></li>
        								<li><i class="icon-star"></i><a href="#" class="card-link">調</a></li>
        							</ul>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div><!-- //card kanji-->
        		<!--card kanji-->
        		<div class="col-sm-3 col-md-3">
        			<div class="card">
        				<div class="card-header">
        					<h4 class="card-title">TUYỆT HẢO ĐIỀU</h4>
        					<div class="heading-elements">
        						<a data-toggle="modal" data-target="#addTagForm" 　id="add-tag" class="btn btn-lg">
        						<span class="icon-android-add"></span>
        						</a>
        					</div>
        				</div>
        				<div class="card-body">
        					<div class="card-block">
        						<p class="kanji-word" ><a class="kanji-word" href="{{asset('word/detail/')}}"> 絶好調</a></p>
        						<p class="kanji-yomikata">ぜっこうちょう</p>
        					</div>
        					<div class="card-block">
        						<p class="kanji-remember">例文：　親は木の上に立って自分の遊んでいる子供を見る</p>
        						<div class="heading-elements">
        							<ul class="list-inline mb-0 stroke-part">
        								<li><i class="icon-star"></i><a href="#" class="card-link">絶</a></li>
        								<li><i class="icon-star"></i><a href="#" class="card-link">好</a></li>
        								<li><i class="icon-star"></i><a href="#" class="card-link">調</a></li>
        							</ul>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div><!-- //card kanji-->
    		</div>
        </div>
        <div class="seemore">
    		<a data-action="collapse"><i class="icon-plus4"><span class="see-more text-primary">もっと見る</span></i></a>
        </div>
	</div>
	<!-- ///see more -->
</section>







<!--似ている他の漢字-->
<section id="thin-headings" class="row">
	<div class="text-muted float-xs-right info">
		<button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#send-report"
		data-placement="left" title="" data-original-title="Add new 述語">
		<span class="icon-android-add"></span>
		</button>
		<button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#send-report"
			data-placement="left" title="" >
		<span class="icon-bullhorn"></span>
		</button>
	</div>
	<h2 id="chapter1" class="content-header-title">似ている漢字</h2>
	<hr>
    <div class="row match-height">
		<!--card kanji-->
		<div class="col-xl-3 col-md-6"><!-- card -->
			<div class="card" style="height: auto;">
				<div class="card-header">
					<span class="card-no">23</span> <h4 class="card-title">Yet remember</h4>
					<div class="heading-elements">
						<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
							<span class="fa fa-star pull-left"></span>
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="card-block">
						<div class="kanji-card-mean">
							<h4 class="card-title kanji-title"><a href="{{asset('kanji/detail/')}}" >箱</a></h4>
							<h5 class="card-title kanji-onyomi">オンヨミ</h5>
							<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
						</div>
						<div class="kanji-card-thumb">
							<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
						</div>
					</div>
					<div class="card-block">
						<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
						<div class="heading-elements">
							<ul class="list-inline mb-0 stroke-part">
								<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //card -->
		<div class="col-xl-3 col-md-6"><!-- card -->
			<div class="card" style="height: auto;">
				<div class="card-header">
					<span class="card-no">23</span> <h4 class="card-title">Yet remember</h4>
					<div class="heading-elements">
						<a id="like" class="btn btn-lg btn-block btn-shared btn-favorite">
							<span class="fa fa-star pull-left"></span>
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="card-block">
						<div class="kanji-card-mean">
							<h4 class="card-title kanji-title"><a href="{{asset('kanji/detail/')}}" >箱</a></h4>
							<h5 class="card-title kanji-onyomi">オンヨミ</h5>
							<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
						</div>
						<div class="kanji-card-thumb">
							<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
						</div>
					</div>
					<div class="card-block">
						<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
						<div class="heading-elements">
							<ul class="list-inline mb-0 stroke-part">
								<li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
								<li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //card -->
	</div>
	<div class="continue"><a href="" >もっと見る </a></div>
</section>





<!--///////////////////////////Modal popup/////////////////////////->


<!-Modal Send msg to admin about the way remember kanji of other`s user -->
<div class="modal fade text-xs-left" id="addTagForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">新しいタグを作成</label>
            </div>
            <form action="#">

				<ul class="nav nav-tabs nav-justified">
					<li class="nav-item">
						<a class="nav-link active" id="active-tab" data-toggle="tab" href="#active" aria-controls="active" aria-expanded="true">既にタグに追加</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="link-tab" data-toggle="tab" href="#link" aria-controls="link" aria-expanded="false">新しいタグを作成</a>
					</li>
				</ul>
				<div class="tab-content px-1 pt-1">
					<div role="tabpanel" class="tab-pane fade active in" id="active" aria-labelledby="active-tab" aria-expanded="true">
						<div class="form-group">
							<ul class="list-group">
								<li class="list-group-item">
									Nhat ky du hoc
									<button type="button" class="btn btn-secondary float-sm-right" >
										<span class="icon-android-remove"></span>
									</button>
								</li>
								<li class="list-group-item">
									Nhat ky ban nuoc
									<button type="button" class="btn btn-secondary float-sm-right">
										<span class="icon-android-remove"></span>
									</button>
								</li>
								<li class="list-group-item">
									Nhat ky yeu nuoc
									<button type="button" class="btn btn-secondary float-sm-right">
										<span class="icon-android-add"></span>
									</button>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="link-tab" aria-expanded="false">
						<div class="modal-body">
							<label>タイトル: </label>
							<div class="form-group">
								<input type="text" placeholder="This is new tag" class="form-control">
							</div>
							<label>説明: </label>
							<div class="form-group">
								<input type="text" placeholder="説明" class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-outline-secondary btn-small" value="作成">
							</div>
						</div>
					</div>
				</div>
            </form>
        </div>
    </div>
</div><!-- Modal edit tag -->



<!--Modal add new kunyomi example -->
<div class="modal fade text-xs-left" id="addKunyomiExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#">
				<div class="modal-body">
					<label>漢字: </label>
					<div class="form-group">
						<input type="text" class="form-control">
					</div>
					<label>読み方: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>意味: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>例文: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>ベトナム語の意味: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>同じ読み方のある言葉: </label>
					<div class="form-group">
						<input type="text" placeholder="厚い、暑い、熱い" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-outline-secondary btn-small" value="追加">
					</div>
				</div>
				</div>
            </form>
        </div>
    </div>
</div><!-- Modal add new kunyomi example -->




<!--Modal add new onyomi example -->
<div class="modal fade text-xs-left" id="addOnyomiExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#">
				<div class="modal-body">
					<label>述語: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>ふりがな: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>例文: </label>
					<div class="form-group">
						<input type="text"  class="form-control">
					</div>
					<label>意味: </label>
					<div class="form-group">
						<input type="text"　 class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-outline-secondary btn-small" value="追加">
					</div>
				</div>
				</div>
            </form>
        </div>
    </div>
</div><!-- Modal add new onyomi example -->



<!--Modal Send report -->
<div class="modal fade text-xs-left" id="send-report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
				<label class="modal-title text-text-bold-600" id="myModalLabel33">レポートフォーム</label>
			</div>
			<form action="#">
		  	  <div class="modal-body">
				<label>報告内容: </label>
				<textarea id="donationinput7" rows="5" class="form-control square" name="comments" placeholder="comments"></textarea>
			  </div>
			  <div class="modal-footer">
				<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="キャンセル">
				<input type="submit" class="btn btn-outline-primary btn-lg" value="送信">
			  </div>
			</form>
		</div>
	</div>
</div><!--///Modal Send report -->
									
									
<!--/ //////////////////////////End Modal popup/////////////////////////-->


</div><!--//content-body -->
<script src="{{ URL::to('template/app-assets/js/core/libraries/jquery.min.js') }}"></script>
<script src="{{ URL::to('template/assets/js/card.js') }}"></script>

@endsection
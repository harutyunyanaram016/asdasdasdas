<div class="slicebox-slider ">
		<div class="container">
			<div class="slicebox-slider-grid">
				<div class="col-md-12">
					<img src="<?=base_url();?>uploads/<?=($page_info['mini_img'])?$page_info['mini_img']:'no-img.png';?>" alt="" class="main-img article-view-img">
					<div class="seen-cnt text-center">
						<i class="fa fa-eye"></i><span class="seen-number"><?=$page_info['count_views'];?></span>
						<h4 style="font-weight: bold;" class="blog-main"><?=$page_info['title'];?></h4>
						<div class="article-content">
						    <?=$page_info['text'];?>
                        </div>
				    </div>
				</div>
			    <div class="breaking-news-grid-right slicebox-slider-right">
					<h3 class="text-center article-view-papular-title">Популярные</h3>
					<div class="row">
	                    <?php foreach($popular_materials as $item): ?>
	                    	<div class="col-lg-3 col-xs-6 article-view-papular">
								<div class="breaking-news-grid-right-grids">
									<div class="breaking-news-grid-right-gridl">
										<a href="<?=site_url('article/'.$item['slug']);?>"><img src="<?=base_url();?>uploads/<?=($item['mini_img'])?$item['mini_img']:'no-mini-img.png';?>" alt=" " class="img-responsive"></a>
									</div>
									<div class="breaking-news-grid-right-gridr">
										<h4><a href="<?=site_url('article/'.$item['slug']);?>"><?=$item['title'];?></a></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
	                    <?php endforeach;?>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
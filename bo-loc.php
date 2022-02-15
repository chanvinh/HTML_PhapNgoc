<div class="s_filter align-items--center">
	<div class="row row-flex">
		<div class="col-12 col-xs-6 col-sm-3">
			<div class="c-select c-form-border">
				<div class="c_input text--icon" data-ht-trigger="c-select">Giá</div>
				<span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
				<div class="c_list">
					<?php $location = [
						[name=>'Chưa xác định'],
						[name=>'Dưới 5 triệu'],
						[name=>'5 triệu đến 10 triệu'],
						[name=>'Từ 10 triệu đến 20 triệu'],
						[name=>'Lớn hơn 20 triệu'],
					] ?>
					<?php for ($i = 1; $i <= 5; $i++){ ?>
						<div class="c-radio">
							<label><input type="radio" name="single"><span><?php echo $location[$i-1]['name'] ?></span></label>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-12 col-xs-6 col-sm-3">
			<div class="c-select c-form-border">
				<div class="c_input text--icon" data-ht-trigger="c-select">Sắp xếp</div>
				<span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
				<div class="c_list">
					<?php $location = [
						[name=>'Giá thấp đến cao'],
						[name=>'Giá cao đến thấp'],
						[name=>'Sản phẩm mới'],
						[name=>'Sản phẩm khuyến mãi'],
						[name=>'Sản phẩm nổi bật']
					] ?>
					<?php for ($i = 1; $i <= 5; $i++){ ?>
						<div class="c-radio">
							<label><input type="radio" name="single"><span><?php echo $location[$i-1]['name'] ?></span></label>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-12 col-xs-6 col-sm-3">
			<div class="c-select c-form-border">
				<div class="c_input text--icon" data-ht-trigger="c-select">Màu</div>
				<span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
				<div class="c_list">
					<?php $location = [
						[name=>'Đỏ'],
						[name=>'Tím'],
						[name=>'Đen'],
						[name=>'Xám'],
						[name=>'Hồng']
					] ?>
					<?php for ($i = 1; $i <= 5; $i++){ ?>
						<div class="c-radio">
							<label><input type="radio" name="single"><span><?php echo $location[$i-1]['name'] ?></span></label>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-12 col-xs-6 col-sm-3">
			<div class="c-select c-form-border">
				<div class="c_input text--icon" data-ht-trigger="c-select">Chất liệu</div>
				<span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
				<div class="c_list">
					<?php $location = [
						[name=>'Vải'],
						[name=>'Giấy'],
						[name=>'Nhung'],
						[name=>'Lụa'],
						[name=>'Nilong']
					] ?>
					<?php for ($i = 1; $i <= 5; $i++){ ?>
						<div class="c-radio">
							<label><input type="radio" name="single"><span><?php echo $location[$i-1]['name'] ?></span></label>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<a href="javascript:;" class="c-button-8"><i class="fa fa-search" aria-hidden="true"></i></a>
</div>
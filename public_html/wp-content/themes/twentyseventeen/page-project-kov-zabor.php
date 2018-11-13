<?php
/**
 * template name: Проект - Кованый забор
 */

get_header(); ?>

<div class="project-wrap project-zabor">
    <div class="container">
        <div class="row">
            <h1><? if($h1 = get_field('h1')){ echo $h1; } else { the_title(); } ?></h1>
            <div class="block-title-separator">
                    <div class="left-line"></div>
                    <div class="trapeze"></div>
                    <div class="right-line"></div>
            </div>
            <? get_sidebar(); ?>
                <div class="col-md-9">
            <div class="project-short-info row">
                <div class="col-md-6">
                    <? $thumb = get_field('proj_img'); ?>
                    <div class="project-thumb">
                        <? if($thumb) { ?>
                        <a class="fncbox" href="<?=$thumb; ?>"><img src="<? echo kama_thumb_src('src=' . $thumb . '&w=835&h=465'); ?>" alt=""></a>
                        <? } else { ?> 
                        <a class="fncbox" href="<? echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"><img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=835&h=465'); ?>" alt=""></a>
                        <? } ?>
                        <? $price = get_field('zab_price'); ?>  
                        <div class="primary-bottom">
                            <div class="item-prices waiting-for-primary">
                                <ul class="prices-options">
                                    <li class="waiting-for">Пожалуйста, подождите...</li>
                                </ul>
                                <div class="prices-options">
                                    <div class="prices-title">СУММА</div>
                                    <div class="prices-summ-item waiting-for"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="project-short-descr">
                       <h3>Описание: </h3> 
                       <? while(have_posts()) { the_post(); 
                            the_content();
                        } ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project-short-descr">
                       <div class="calc-forms" onchange="return update(event)">
                        <? echo do_shortcode('[CP_CALCULATED_FIELDS id="' . get_field('calc_id') . '"]'); ?>
                        
                        <div class="pikies-select pik-non-opened waiting-for-primary">
			<div class="pik-0 pik-selected pik-item" numb="0" img="<?php echo $img1; ?>">
				<div class="pik-thumb"></div>
				<div class="pik-secondary">
					<div class="pik-title">Без пик</div>
					<div class="pik-desc">Этот вариант хорошо подходит для современного лаконичного дизайна, подчеркнет чистоту геометрической формы. </div>
				</div>
			</div>
			<div class="pik-1 pik-item-non-selected pik-item" numb="1" img="<?php echo $img2; ?>">
				<div class="pik-thumb"></div>
				<div class="pik-secondary">
					<div class="pik-title">Малые пики</div>
					<div class="pik-desc">Этот вариант хорошо подходит для современного лаконичного дизайна, подчеркнет чистоту геометрической формы. </div>
				</div>
			</div>
			<div class="pik-2 pik-item-non-selected pik-item" numb="2" img="<?php echo $img3; ?>">
				<div class="pik-thumb"></div>
				<div class="pik-secondary">
					<div class="pik-title">«Английские»</div>
					<div class="pik-desc">Этот вариант хорошо подходит для современного лаконичного дизайна, подчеркнет чистоту геометрической формы. </div>
				</div>
			</div>
			<div class="pik-3 pik-item-non-selected pik-item" numb="3" img="<?php echo $img4; ?>">
				<div class="pik-thumb"></div>
				<div class="pik-secondary">
					<div class="pik-title">«Итальянские»</div>
					<div class="pik-desc">Этот вариант хорошо подходит для современного лаконичного дизайна, подчеркнет чистоту геометрической формы. </div>
				</div>
			</div>
			<div class="pik-4 pik-item-non-selected pik-item" numb="4" img="<?php echo $img5; ?>">
				<div class="pik-thumb"></div>
				<div class="pik-secondary">
					<div class="pik-title">Шары</div>
					<div class="pik-desc">Этот вариант хорошо подходит для современного лаконичного дизайна, подчеркнет чистоту геометрической формы. </div>
				</div>
			</div>
		</div>
                        
                        </div>
                    </div>
                    <div class="btn set-values" onClick="tModalForm.show('frm_apply');">ПОДТВЕРДИТЬ ЗАКАЗ</div>
                </div>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="form-line" style="background: url(<? bloginfo('template_directory'); ?>/images/form-line.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-line-text">
                   ХОТИТЕ ЗАКАЗАТЬ ЗАБОР?<br>
                    <span>Оставьте свой номер и мы проконсультируем Вас!</span>
                </div>
            </div>
            <div class="col-md-6">
                <? echo do_shortcode('[contact-form-7 id="579" title="Позвоните мне"]'); ?>
            </div>
        </div>
    </div>
</div>                          
<div class="project-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><? the_field('h2'); ?></h2>
                    <? the_field('full_description'); ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


<script>
			$( document ).ready(function() {
			$('title').text('<?php echo $title; ?>');
			});
			
			function update( event ) {
			
			
			$('#length-value-id').val( $('.length-value input[type="range"]').val() );
			$('#calc-value').val( $('.calc-value input').val() );
			$('#strong-value').val( $('.strong-value :checked').attr('vt') );
			$('#pikies-value').val( $('.pikies-new-value input[type="radio"]:checked').parent().text() );
			$('#varies-value').val( $('.varies-value select option:selected').text() );
			$('#material-value').val( $('.material-value select option:selected').text() );
			$('#decor-value').val( $('.decor-value select option:selected').text() );
			$('#length-value').val( $('.length-value input[type="range"]').val() );
			$('#height-value').val( $('.height-value input:checked').parent().text() );
			
			
			$('#item-pikies-value').text( 'Пики: ' + $('.pikies-new-value input[type="radio"]:checked').parent().text() );
			$('#item-varies-value').text( 'Покраска: ' + $('.varies-value select option:selected').text() );
			$('#item-material-value').text( 'Основной материал: ' + $('.material-value select option:selected').text() );
			$('#item-length-value').text( 'Длина: ' + $('.length-value input[type="range"]').val() + ' м' );
			$('#item-height-value').text( 'Высота: ' + $('.height-value input:checked').parent().text() + ' м' );
			
			$('.prices-summ-item').text( $('.calc-value input').val() + ' Р' );
			
			return;
			
			};
			
			$(document).ready(function () { 
			    $("form").submit(function () {
			        // Получение ID формы
			        var formID = $(this).attr('id');
			        // Добавление решётки к имени ID
			        var formNm = $('#' + formID);
			        $.ajax({
			            type: "POST",
			            url: '/wp-content/themes/kris2.0/mail.php',
			            data: formNm.serialize(),
			            success: function (data) {
			                // Вывод текста результата отправки
			                $(formNm).html(data); 
			            },
			            error: function (jqXHR, text, error) {
			                // Вывод текста ошибки отправки
			                $(formNm).html(error);         
			            }
			        });
			        return false;
			    });
			});
			
			
			$( document ).ready(function() {
			
			var topel = $('.prices-summ-item').offset().top;
			
			$(window).scroll(function() {
			if ($(this).scrollTop() > topel){  
			    $('body').addClass("header-sticky-new");
			  }
			  else{
			    $('body').removeClass("header-sticky-new");
			  }
			});
			
			$('.pikies-select').appendTo('.pikies-new-value');
			
			$('.length-value input').attr('type', 'range');
			$('.length-value .dfield').prepend('<input type="number" id="length-value-id" class="length-value-show">'); 	
			$('.length-value-show').val( $('.length-value input[type="range"]').val() ).attr('max', $('.length-value input[type="range"]').attr('max')).attr('min', $('.length-value input[type="range"]').attr('min'));
			
			$('.prices-summ-item').text($('.calc-value input').val() + ' Р');
			$('.prices-summ-item').removeClass('waiting-for')
			
			var b = '<li id="item-height-value" class="item-height-value" >Высота: ' + $('.height-value input:checked').parent().text() + ' м</li>';
			b = b + '<li id="item-length-value" class="item-length-value" >Длина: ' + $('.length-value input[type="range"]').val() + ' м</li>';
			b = b + '<li id="item-pikies-value" class="item-pikies-value" >Пики: ' + $('.pikies-new-value input[type="radio"]:checked').parent().text() + '</li>';
			b = b + '<li id="item-varies-value" class="item-varies-value" >Покраска: ' + $('.varies-value select option:selected').text() + '</li>';
			b = b + '<li id="item-material-value" class="item-material-value" >Основной материал: ' + $('.material-value select option:selected').text() + '</li>';
			
			$('.waiting-for').remove()
			$(b).appendTo( $('ul.prices-options') );
			$('.waiting-for-primary').removeClass('waiting-for-primary');
			
			
			var a = '<input type="hidden" id="height-value" name="height-value" value=' + $('.height-value input:checked').parent().text() + '>';
			a = a + '<input type="hidden" id="length-value" name="length-value" value=' + $('.length-value input[type="range"]').val() + '>';
			a = a + '<input type="hidden" id="pikies-value" name="pikies-value" value=' + $('.pikies-new-value input[type="radio"]:checked').parent().text() + '>';
			a = a + '<input type="hidden" id="varies-value" name="varies-value" value=' + $('.varies-value select option:selected').text() + '>';
			a = a + '<input type="hidden" id="material-value" name="material-value" value=' + $('.material-value select option:selected').text() + '>';
			a = a + '<input type="hidden" id="decor-value" name="decor-value" value=' + $('.decor-value select option:selected').text() + '>';
			a = a + '<input type="hidden" id="strong-value" name="strong-value" value=' + $('.strong-value :checked').attr('vt') + '>';
			a = a + '<input type="hidden" id="calc-value" name="calc-value" value=' + $('.calc-value input').val() + '>';
			a = a + '<input type="hidden" id="main-value" name="title" value="' + $(".item-title").text() + '">';
			
			
			$(a).appendTo( $('.remodalBorder form') );
			
			function select_pik(Elem) {
				if ($(Elem).attr('class').search('pik-selected') == -1 ) { 
				var numb = $(Elem).attr('numb');
				var img = $(Elem).attr('img');
				$('.primary-thumb img').attr('src', img).attr('srcset', img);
				$('.pik-selected').removeClass('pik-selected').addClass('pik-item-non-selected');
				$(Elem).removeClass('pik-item-non-selected').addClass('pik-selected').prependTo('.pikies-select');
				$( $('.pikies-new-value input[type="radio"]')[numb] ).trigger('click'); 
				opensubmit(Elem);
				update(event);
				}
			}
			
			function opensubmit(Elem) {
				
				if ($(Elem).attr('class').search('pik-selected') != -1 ) { 
				if ( $( ".pik-non-opened" ).length ) { $( ".pik-non-opened" ).addClass('pik-opened').removeClass('pik-non-opened'); } 
				else { $( ".pik-opened" ).removeClass('pik-opened').addClass('pik-non-opened'); }
				
			}
			
			}
			
			function changfocus(Elem) {
				if ( $(Elem).attr('id') == 'length-value-id' ) {
					$(Elem).attr('id', 'fieldname3_1').attr('name', 'fieldname3_1');
				}
				$('.calc-checkboxes .uh').addClass('uh-active');
				$('body').keyup(function() { $('.length-value input[type="range"]').val( $('.length-value input[type="number"]').val() ); });
				$('body').mousemove(function() { $('.length-value input[type="range"]').val( $('.length-value input[type="number"]').val() ); });
			}
			
			function delfocus(Elem) {
				$(Elem).attr('id', 'length-value-id').attr('name', '');
				$('.calc-checkboxes .uh').removeClass('uh-active');
			}
			$( ".length-value-show" ).blur(function() { delfocus(this); }); 
			
			$( ".length-value-show" ).focus(function() { changfocus(this); });
			
			$( ".pik-item" ).click(function() { opensubmit(this); select_pik( this );  } );
			
			$('.calc-PutDesc').keyup(function() { $('.calc-PutDescInput').val( $('.calc-PutDescPlace').val() ); } );
			
			});
			
    
            jQuery('.set-values').click(function(){
                jQuery('input[name="hidden-height"]').val(jQuery('.item-height-value').html());
                jQuery('input[name="hidden-length"]').val(jQuery('.item-length-value').html());
                jQuery('input[name="hidden-pikies"]').val(jQuery('.item-pikies-value').html());
                jQuery('input[name="hidden-col"]').val(jQuery('.item-varies-value').html());
                jQuery('input[name="hidden-material"]').val(jQuery('.item-material-value').html());
                jQuery('input[name="hidden-sum"]').val(jQuery('.prices-summ-item').html());
            });
			
			
		</script>
<style>
	input[type=range] {
	-webkit-appearance: none;
	border-radius: 0px;
	height: 11px;
	background-color: #f1f1f1;
	border: 2px solid transparent !important;    
	transition: 0.3s;
	}
	input[type='range']::-webkit-slider-thumb {
	-webkit-appearance: none;
	background-color: #ddb269;
	border: 0;
	width: 25px;
	height: 25px;
	border-radius: 100%;
	cursor: pointer;
	}
	.length-value .dfield {
	display: flex;
	justify-content: space-between;
	align-items: center;
	}
	input[type='range']:focus {
	outline: none;
	border: 2px solid #ddd !important;
	}
</style>
<?php get_footer();

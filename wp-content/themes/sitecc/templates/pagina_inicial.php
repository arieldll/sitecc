<?php
/*
Template Name: Pรกgina Inicial
*/

?>

<div class="busca">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-4 col-md-offset-8 col-lg-3 col-lg-offset-9">
			<input type="text" class="form-control">
		</div>
	</div>
	
</div>
<div class="row">
	
	<div class="links-rapidos col-xs-12 col-sm-6 col-md-5  col-lg-4">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a class="btn btn-lg btn-block btn-default link" href="http://www.uffs.edu.br/index.php">Site universidade</a>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a class="btn btn-lg btn-block btn-default link" href="moodle.uffs.edu.br">Moodle</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<a class="btn btn-lg btn-block btn-default link" href="aluno.uffs.edu.br/login.xhtml">Portal do aluno</a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<a class="btn btn-lg btn-block btn-default link" href="http://www.uffs.edu.br/index.php?option=com_content&view=category&layout=blog&id=274&Itemid=853&site=biblio">Biblioteca</a>
			</div>
		</div>
	</div>

	<div class="painel col-xs-12 col-sm-6 col-md-7 col-lg-8 ">
		<div class="clearfix painel-titulo">
			<h3 class="pull-left">Notícias</h3>
			<a href="" class="ver-mais pull-right">
				ver mais <span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<?php 
	      $args = array(
	        'posts_per_page'   => 10,
	        'offset'           => 0,
	        'category'         => '',
	        'orderby'          => 'post_date',
	        'order'            => 'DESC',
	        'include'          => '',
	        'exclude'          => '',
	        'meta_key'         => '',
	        'meta_value'       => '',
	        'post_type'        => 'noticia',
	        'post_mime_type'   => '',
	        'post_parent'      => '',
	        'post_status'      => 'publish',
	        'suppress_filters' => true ); 
	      ?>
	     <?php $posts_array = get_posts( $args ); ?>
	      <?php if ($posts_array): $count = 0; ?>
	          <table>
	          	<tr>
	            <?php foreach ($posts_array as $post): 
	            	
	            	if ($count === 2) {
	            	echo "</tr><tr>"; $count=0;
	            }?>
	            <td>
	              <a href="<?php echo post_permalink($post->ID);?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title;?></a>
	            </td>
	            <?php $count = $count+1;endforeach ?>
	            <?php 	            	
	            	if ($count === 2) {
	            	echo "</tr>"; $count=0;
	            }?>
	          </table>
	      <?php endif ?>
	</div>
</div>
<div class="row">
	
	<div class="painel col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
		<div class="clearfix painel-titulo">
			<h3 class="pull-left">Blog</h3>
			<a href="" class="ver-mais pull-right">
				ver mais <span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<?php 
	      $args = array(
	        'posts_per_page'   => 5,
	        'offset'           => 0,
	        'category'         => '',
	        'orderby'          => 'post_date',
	        'order'            => 'DESC',
	        'include'          => '',
	        'exclude'          => '',
	        'meta_key'         => '',
	        'meta_value'       => '',
	        'post_type'        => 'blog',
	        'post_mime_type'   => '',
	        'post_parent'      => '',
	        'post_status'      => 'publish',
	        'suppress_filters' => true ); 
	      ?>
	     <?php $posts_array = get_posts( $args ); ?>
	      <?php if ($posts_array): ?>
	          <ul >
	            <?php foreach ($posts_array as $post): ?>
	            <li>
	              <a href="<?php echo post_permalink($post->ID);?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title;?></a>
	            </li>
	            <?php endforeach ?>
	          </ul>
	      <?php endif ?>
	</div>
	<div class="painel col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
		<div class="clearfix painel-titulo">
			<h3 class="pull-left">Eventos</h3>
			<a href="" class="ver-mais pull-right">
				ver mais <span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<?php 
	      $args = array(
	        'posts_per_page'   => 5,
	        'offset'           => 0,
	        'category'         => '',
	        'orderby'          => 'post_date',
	        'order'            => 'DESC',
	        'include'          => '',
	        'exclude'          => '',
	        'meta_key'         => '',
	        'meta_value'       => '',
	        'post_type'        => 'evento',
	        'post_mime_type'   => '',
	        'post_parent'      => '',
	        'post_status'      => 'publish',
	        'suppress_filters' => true ); 
	      ?>
	     <?php $posts_array = get_posts( $args ); ?>
	      <?php if ($posts_array): ?>
	          <ul >
	            <?php foreach ($posts_array as $post): ?>
	            <li>
	              <a href="<?php echo post_permalink($post->ID);?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title;?></a>
	            </li>
	            <?php endforeach ?>
	          </ul>
	      <?php endif ?>
	</div>
	<div class="painel col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
		<div class="clearfix painel-titulo">
			<h3 class="pull-left">Oportunidades</h3>
			<a href="" class="ver-mais pull-right">
				ver mais <span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<?php 
	      $args = array(
	        'posts_per_page'   => 5,
	        'offset'           => 0,
	        'category'         => '',
	        'orderby'          => 'post_date',
	        'order'            => 'DESC',
	        'include'          => '',
	        'exclude'          => '',
	        'meta_key'         => '',
	        'meta_value'       => '',
	        'post_type'        => 'emprego',
	        'post_mime_type'   => '',
	        'post_parent'      => '',
	        'post_status'      => 'publish',
	        'suppress_filters' => true ); 
	      ?>
	     <?php $posts_array = get_posts( $args ); ?>
	      <?php if ($posts_array): ?>
	          <ul >
	            <?php foreach ($posts_array as $post): ?>
	            <li>
	              <a href="<?php echo post_permalink($post->ID);?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title;?></a>
	            </li>
	            <?php endforeach ?>
	          </ul>
	      <?php endif ?>
	</div>

</div>




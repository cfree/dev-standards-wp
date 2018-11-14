<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<style type="text/css">
	.im-wrapper {
		width: 50%;
		position: relative;
	}
	.im-wrapper img.main {
		width: 100%;
	}
	.im-wrapper img.hotspot {
		width: 2%;
		position: absolute;
	}
</style>
<script type="text/javascript">
	$( document ).ready( function() {
		var $img = $( '.im-wrapper img' );
		var img = new Image();
		img.src = $img.attr( 'src' );
		img.onload = function() {
			var naturalHeight = this.height;
			var naturalWidth = this.width;
			$( '.im-wrapper .hotspot' ).each( function() {
				var $this = $( this );
				var x = ( $this.attr( 'data-x' ) / naturalWidth ) * 100;
				var y = ( $this.attr( 'data-y' ) / naturalHeight ) * 100;
				$this.css( 'top', y+'%' ).css( 'left', x+'%' );
			} );
		}
	} );
</script>
<div class="im-wrapper">
	<img class="main" src="http://preview.voltagead.com/demandware-stacks/reebok/bmh-hero/img/MOBILE_HERO.jpg?$staticLink$" alt="placeholder" />
	<img class="hotspot" src="https://placeholdit.imgix.net/~text?txtsize=33&w=5&h=5" data-x="227" data-y="108" />
	<img class="hotspot" src="https://placeholdit.imgix.net/~text?txtsize=33&w=5&h=5" data-x="100" data-y="18" />
	<img class="hotspot" src="https://placeholdit.imgix.net/~text?txtsize=33&w=5&h=5" data-x="200" data-y="24" />
	<img class="hotspot" src="https://placeholdit.imgix.net/~text?txtsize=33&w=5&h=5" data-x="155" data-y="200" />
	<img class="hotspot" src="https://placeholdit.imgix.net/~text?txtsize=33&w=5&h=5" data-x="175" data-y="180" />
	<img class="hotspot" src="https://placeholdit.imgix.net/~text?txtsize=33&w=5&h=5" data-x="15" data-y="150" />
</div>

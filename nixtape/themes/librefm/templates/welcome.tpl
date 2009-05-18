{include file='header.tpl'}
    <div class="yui-u first" id="new-libre-fm">
    <div class="inner-p">
    <h2>{t}New on Libre.fm...{/t}</h2>

    	   <ul>
	   <li>Artist</li>
	   <li>Artist</li>
	   <li>Artist</li>
	   <li>Artist</li>
	   </ul>

     <h2>{t}Upcoming events...{/t}</h2>

    	   <ul>
	   <li>Artist</li>
	   <li>Artist</li>
	   <li>Artist</li>
	   <li>Artist</li>
	   </ul>

   </div>   </div>
    <div class="yui-u" id="sidebar">

	<div id="radio">

		{include file='player.tpl'}

		<script type="text/javascript">
		{if isset($this_user)}
			playerInit(false, "{$this_user->getScrobbleSession()}", "{$radio_session}");
		{else}
			playerInit(false, false, "{$radio_session}");
		{/if}
		</script>

	</div>

    <div id="downloads">

    <h2>{t}Libre music downloads...{/t}</h2>

    <ul>
    <li><a href="#">Foo &mdash; Bar</a></li>
    <li><a href="#">Foo &mdash; Bar</a></li>
    <li><a href="#">Foo &mdash; Bar</a></li>
    <li><a href="#">Foo &mdash; Bar</a></li>
    <li><a href="#">Foo &mdash; Bar</a></li>
    <li><a href="#">Foo &mdash; Bar</a></li>
    <li><a href="#">Foo &mdash; Bar</a></li>
    <li><a href="#">Foo &mdash; Bar</a></li>
    <li><a href="#">Foo &mdash; Bar</a></li>
    </ul>

    <p><a href="#">{t}More Libre music downloads...{/t}</a></p>

    <p><small><a href="http://creativecommons.org/licenses/by-sa/3.0/">{t}License{/t}</a></small></p>

    </div>

</div>
{include file='footer.tpl'}

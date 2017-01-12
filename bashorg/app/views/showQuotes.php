<div class="card">
    <div class="card-content">

        <h3><span class="label label-info">{{pageTitle}}</span></h3>


		<nav aria-label="Page navigation">
		  <ul class="pagination">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    {{#pageLinks}}
		    	<li><a href="{{link}}">{{title}}</a></li>
		    {{/pageLinks}}
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>

		{{#quotes}}
            <div class="jumbotron">
            	<div class="lnk">
            		<a href="showQuote/{{id}}">#{{id}}</a>
            	</div>
                {{text}}
            </div>
        {{/quotes}}


		<nav aria-label="Page navigation">
		  <ul class="pagination">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    {{#pageLinks}}
		    	<li><a href="{{link}}">{{title}}</a></li>
		    {{/pageLinks}}
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>

    </div>
</div>
<div class="jumbotron text-center">
    <h1>Catalog</h1>
</div>
<ul class="nav">
    <li class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">User Role
        <span class="caret"></span></button>      
        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li><a href="/roles/actor/Guest">Guest</a></li>
            <li><a href="/roles/actor/Owner">Owner</a></li>
            <li><a href="/roles/actor/User">User</a></li>
        </ul>
    </li>   
</ul>
<h2>{pagetitle}</h2>
<br />
{itemTable}

<h3>Equipment Set</h3>
<table class="table">
        <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Head</th>
                <th>Weapon</th>
                <th>Robe</th>
                <th>Feet</th>
                <th>Hands</th>
        </tr>
        {display_tasks}
</table>
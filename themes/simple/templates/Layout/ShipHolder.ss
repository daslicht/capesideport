<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
    <article>
        <h1>$Title</h1>
        $Content       
        <div class="content">$Content</div>
    </article>
    <% loop $Children %>
        <% include ShipTeaser %>
    <% end_loop %>
        $Form
</div>
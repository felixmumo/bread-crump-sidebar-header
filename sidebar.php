<style>
/* SIDEBAR */
.sidebar{
    position:fixed;
    top:95px;
    left:0;
    width:220px;
    height:calc(100vh - 95px);
    background:linear-gradient(to bottom,#0b4f79,#0d6fb8);
    transition:.3s;
    overflow:hidden;
}
.sidebar.collapsed{width:60px}

.sidebar ul{list-style:none}
.sidebar ul li a{
    display:flex;
    align-items:center;
    gap:12px;
    padding:15px;
    color:#fff;
    text-decoration:none;
}
.sidebar ul li a:hover{background:rgba(255,255,255,.15)}

/* MAIN CONTENT */
.main{
    margin-left:220px;
    margin-top:95px;
    padding:20px;
    transition:.3s;
}
.main.expanded{margin-left:60px}

/* CARDS */
.card{
    background:#fff;
    border-radius:6px;
    padding:20px;
    box-shadow:0 2px 6px rgba(0,0,0,.1);
    margin-bottom:20px;
}
.card h3{margin-bottom:10px;color:#1e73be}
</style>

<div id="sidebar" class="sidebar">
    <ul>
        <li><a href="#"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
        <li><a href="#"><i class="fas fa-building"></i><span>Properties</span></a></li>
        <li><a href="#"><i class="fas fa-users"></i><span>Tenants</span></a></li>
        <li><a href="#"><i class="fas fa-file-invoice"></i><span>Invoices</span></a></li>
        <li><a href="#"><i class="fas fa-money-bill"></i><span>Payments</span></a></li>
        <li><a href="#"><i class="fas fa-chart-line"></i><span>Reports</span></a></li>
        <li><a href="#"><i class="fas fa-cog"></i><span>Settings</span></a></li>
        <li><a href="#"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
    </ul>
</div>

<div id="main" class="main">

    <!-- SAMPLE DASHBOARD CONTENT -->
    <div class="card">
        <h3>Total Properties</h3>
        <p>24 Registered Properties</p>
    </div>

    <div class="card">
        <h3>Total Tenants</h3>
        <p>68 Active Tenants</p>
    </div>

    <div class="card">
        <h3>Monthly Rent Collected</h3>
        <p>KES 1,250,000</p>
    </div>

</div>

<script>
function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle("collapsed");
    document.getElementById("main").classList.toggle("expanded");
}
</script>

</body>
</html>

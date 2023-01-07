<?php require_once("../resources/config.php");   ?>
<?php session_start(); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");   ?>
<style>
    .active:after {
  content: "\2212";
}
.active, .accordion:hover {
  background-color: #ccc;
}
p{
        font-family: "Source Sans Pro",Arial, Helvetica, sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 14px;
        margin: 0 0 1.5em;
    padding: 0;
        display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
td {
    padding: 0.6em;
    display: table-cell;
    vertical-align: inherit;
}
tbody {
    display: table-row-group;
    vertical-align: middle;
    border-color: inherit;
}
tr {
    
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-style: solid;
    border-color: #e9e9e9;

}
.logistics{
    height: 200px;
    width: 100%;
    text-align: left;
    background-color: #839ffa;
}
.logistics .h1 {
     font-family: "Roboto Condensed",Arial, Helvetica, sans-serif;
     font-weight: 700;
     font-size:60px;
}

#page-title{
        padding-top: 50px;
    padding-bottom: 50px;
    text-align: left;
    color: #fff;
        position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.page-title .kapee-breadcrumb {
        display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}


.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}
.accordion:hover{
    color: #839ffa;
}


.panelling {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

.card {
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-style: solid;
    border-color: #e9e9e9;
}

.card-body {
    /*    -ms-flex: 1 1 auto;*/
    /*flex: 1 1 auto;*/
    padding: 1.25rem;
}
table{
        border-collapse: collapse;
    margin: 0 0 1.5em;
    width: 100%;
    display: table;
    text-indent: initial;
    border-spacing: 2px;
    border-color: grey;
}
.separator-right {
    left: 0;
    border-bottom-color: #444444;
        display: inline-block;
        border-bottom: 2px solid;
    border-bottom-width: 2px;
    border-bottom-style: solid;
    border-bottom-color: initial;
    position: absolute;
    bottom: 0;
    width: 48px;
    display: none;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}
.heading-title {
    font-size: 25px;
    line-height: 25px;
    font-weight: 600;
    text-transform: uppercase;
    color: grey;
    padding: 0.5em;
    margin: 0;
    font-family: "Roboto Condensed",Arial, Helvetica, sans-serif;
    display: block;
}
.heading-jumb {
    font-size: 30px;
    line-height: 25px;
    font-weight: 600;
    text-transform: uppercase;
    color: white;
    padding-top: 0.5em;
    padding-bottom: 0.5em;
    margin: 0;
    font-family: "Roboto Condensed",Arial, Helvetica, sans-serif;
    display: block;
}
.bread {
    color: #795088;
}
.top-pad {
    padding-top: 1em;
}
p {
    font-size: 15px;
    line-height: 25px;
    font-weight: 200;
    font-family: "Roboto Condensed",Arial, Helvetica, sans-serif;
}

</style>
    <!-- Page Content -->
    <div class="container">

          
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom logistics">
      <div id="page-title">
        <h1 class="heading-jumb">Shipping &amp; Delivery</h1>
       
        <div class="entry-breadcrumbs">
            <nav class="kapee-breadcrumb">
                <a href="https://safewayskin.com/app" class="bread">Home</a> / <span class="last">Shipping &amp; Delivery</span>
                </nav>
        </div>
      </div>
    </header>
    
     <section id="logistics">
              <div class="container">
                  <div>
        <div class=" col-lg-6 ">         
        
        <h3 class="heading-title top-pad">SHIPPING INFORMATION</h3>
        <span class="separator-right"></span>
        <div class="card">
        <div class="card-body">
        
        <button class="accordion"><b>Where do you deliver to?</b></button>
        <div class="panelling ">
        <p>We deliver worldwide. Cost of shipping is calculated at checkout. Cost may vary depending on the weight of shipments and location of delivery</p>
        <h5>Delivery estimate</h5>
        <table>
            <tbody>
                <tr>
                    <td>
                        <span style="font-weight: 400;">LOCATION</span>
                    </td>
                    <td>
                        <span style="font-weight: 400;">Expected Arrival</span>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <span style="font-weight: 400;">Ibadan</span>
                    </td>
                    <td>
                        <span style="font-weight: 400;">2-3 Working Days</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="font-weight: 400;">Other parts of Nigeria</span>
                    </td>
                    <td>
                        <span style="font-weight: 400;">7-10 Working Days</span>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <span style="font-weight: 400;">Outside Nigeria</span>
                    </td>
                    <td>
                        <span style="font-weight: 400;">15-20 Working Days</span>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        </div>
        </div>
        
        <hr>
        
        <h4 class="heading-title">PLEASE NOTE</h4>
        <p>We do not deliver during public holidays and Sundays. The specified time frames are only estimates, as deliveries could be earlier and on very rare occasions, later than estimated. In the event that your items are not delivered within the estimated time, do not hesitate to give us a call or send us an email; we definitely will have it rectified.</p>
        </div> 
        
        <div class=" col-lg-6 ">         
        <h3 class="heading-title top-pad">COMPLAINTS & REFUNDS</h3>
        <div class="card">
        <div class="card-body">
        
        <button class="accordion"><b>How do I return something to you?</b></button>
        <div class="panelling ">
        <p>We do not offer refunds or accept returns and/or exchanges except for damaged (at the point of delivery) or lost parcels. We urge you to carefully inspect your package upon delivery to ensure the items are intact. In the unlikely event that the item(s) ordered is damaged or incomplete, please contact us within 24 – 48 hours by telephone , WhatsApp or email. Where your parcel is lost in transit, you will be notified promptly of this development as soon as we become aware of it. Upon such notification, we will proceed immediately to rectify the issue. If after 5 working days from the date you were notified your parcel still cannot be found, a refund will be paid into your bank account.</p>
       
        </div>
        </div>
        </div>
        
        
        </div>
        </div>
    </div> <!-- /.container -->
        </section>

    


  </div>


     

   <?php include(TEMPLATE_FRONT . DS . "footer.php");   ?>
      </div>
<?php 
//session_start();
require_once('header.php');
require_once('../connectionclass.php');
$obj=new ConnectionClass();
$jid=$_REQUEST['job_id'];
$email=$_SESSION['email'];
 $qryy3="select oid from org_reg where email='$email'";
 $oname=$obj->GetSingleData($qryy3);
 //echo $oname;
$qry1="select * from free_reg f inner join login l inner join request r inner join bidding b on r.femail=l.username and l.status='active'  and l.usertype='Freelancer' and r.femail=f.email and r.status='Completed' and b.email=f.email and b.bstatus='Accept' where r.job_id='$jid' order by r.req_id desc";
    $ree=$obj->GetTable($qry1);
    $amo=$obj->GetSingleRow($qry1);
   $amount=$amo['amount'];
   $fid=$amo['fid'];
   $name=$amo['name'];
    //var_dump($ree); 
   $qry5="select * from free_reg f inner join payment p on p.tofree=f.fid where p.from='$oname'";
    $result=$obj->GetTable($qry5);
    //var_dump($result);
    ?>

      
         <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Bank Details</h3>
                        
                    </div>
                  </div>
              </div>
              <div class="col-md-12 padding-0">
                  
                <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Add Bank Details</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <form class="cmxform"  method="post" action="codes/payment_exe.php?action=insert&job_id=<?php echo $jid;?>">
                          <div class="col-md-6">

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                               <input type="text" class="form-text" name="id" value="<?php echo $name;?>" readonly>
                                <span class="bar"></span>
                            </div>
                             <input type="hidden" class="form-text" name="fid" value="<?php echo $fid;?>" readonly>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" name="acc_no" placeholder="Enter Account Number" pattern="[0-9]+" title="Enter a valid card number" maxlength="12" minlength="12" required="">
                              <span class="bar"></span>
                            </div>
                          </div>
                          <div class="col-md-6">

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="number" class="form-text" name="pay_amount" value="<?php echo $amount;?>" readonly="">
                                    <span class="bar"></span>
                                </div>
                          </div>                   
                          <div class="col-md-12">
                              
                              <input class="submit btn btn-danger" type="submit" value="Submit">
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
             
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>View Bank Details</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                       <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Freelancer Name</th>
            <th>Card Number</th> 
            <th>Date</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
            <?php
            $i=0;
            foreach ($result as $res) 
            {
                $i++;
            ?>
          <tr data-expanded="true">
            <td><?php echo $i;?></td>
             <td><?php echo $res['name'];?></td>
             <td><?php echo $res['card_no'];?></td>
            <td><?php echo $da=date("d-m-Y", strtotime($res['pay_date']) );?></td>
             <td><?php echo $res['pay_amount'];?></td>
          </tr>
          <?php
            }
            ?>
        </tbody>
      </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->

    
         
          
    
<?php require_once('footer.php'); ?>
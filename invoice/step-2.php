<div class="site-heading-wrapper">
  <h2 class="site-heading site-heading-1 text-center">Lets create Invoice - Step 2</h2>
</div>
<div class="small-12 columns">
  <form class="callout text-center"  id="invoice-invoiceForm" action="#" method="post">
    <div class="columns m2 medium-6 large-6 align-center">
      <fieldset>
        <legend>Your details</legend>
        
        <div class="floated-label-wrapper">
          <div class="invoice-data" id="invoice-company-name"></div>
        </div>
        <div class="floated-label-wrapper">
          <div class="invoice-data" id="invoice-full-name">
          </div>
        </div>
        <div class="row floated-label-wrapper">
          <div class="columns small-7 pr0">
            <div class="invoice-data" id="invoice-address-street"></div>
          </div>
          <div class="columns small-2">
            <div class="row">
              <div class="invoice-data" id="invoice-address-street-no"></div>
            </div>
          </div>
          <div class="columns small-3">
            <div class="invoice-data" id="invoice-address-street-no-unit"></div>
          </div>
        </div>
        <div class="row floated-label-wrapper">
          <div class="invoice-data"></div>
        </div>
        <div class="floated-label-wrapper">
          <div class="invoice-data" id="invoice-country"></div>
        </div>
        <div class="floated-label-wrapper">
          <div class="invoice-data" id="invoice-abn"></div>
        </div>
        <p>Your bank account details</p>
        <div class="floated-label-wrapper">
          <div class="invoice-data" id="invoice-bankName"></div>
        </div>
        <div class="row floated-label-wrapper">
          <div class="columns small-12 medium-3">
            <div class="invoice-data" id="invoice-bsb"></div>
          </div>
          <div class="columns small-12 medium-9">
            <div class="invoice-data" id="invoice-bankAccount"></div>
          </div>
          
        </div>
        <p>Additional details</p>
        <div class="floated-label-wrapper">
          <div id="invoice-email"></div>
        </div>
        <div class="floated-label-wrapper">
          <div id="invoice-phone"></div>
        </div>
      </fieldset>
    </div>
    
    <div class="columns medium-6 large-6 align-center">
      <fieldset>
        <legend>Sold to</legend>
        <div class="floated-label-wrapper">
          <div class="invoice-data" id="invoice-company-name"></div>
        </div>
        <div class="floated-label-wrapper">
          <div class="invoice-data" id="invoice-full-name"></div>
        </div>
        <div class="row floated-label-wrapper">
          <div class="columns small-7 pr0">
            <div class="invoice-data" id="invoice-address-street"></div>
          </div>
          <div class="columns small-2">
            <div class="row">
              <div class="invoice-data" id="invoice-address-street-no"></div>
            </div>
          </div>
          <div class="columns small-3">
            <div class="invoice-data" id="invoice-address-street-no"></div>
          </div>
        </div>
        <div class="row floated-label-wrapper">
          <div class="columns small-8">
            <div class="invoice-data" id="invoice-state">
              
            </div>
          </div>
          <div class="columns small-4">
            <div class="invoice-data" id="invoice-address-street-zip"></div>
          </div>
          
        </div>
        <div class="floated-label-wrapper">
          <div class="invoice-data" id="invoice-country"></div>
        </div>
        <div class="floated-label-wrapper">
          <div class="invoice-data" id="invoice-abn"></div>
        </div>
        
        
      </fieldset>
    </div>
    <div class="columns medium-12 align-center">
      <fieldset>
        <legend>Task</legend>
        
        <!-- .columns.small-12.medium-2+.columns.small-12.medium-6+.columns.small-12.medium-2+.columns.small-12.medium-2 -->
        <div class="row">
          
          <div class="columns small-12 medium-2">
            <div class="invoice-data total-task-amount ">
              Quantity
            </div>
          </div>
          <div class="columns small-12 medium-6">
            <div class="invoice-data total-task-amount">
              Description
            </div>
          </div>
          <div class="columns small-12 medium-2">
            <div class="invoice-data total-task-amount ">
              Unit Price
            </div>
          </div>
          <div class="columns small-12 medium-2">
            <div class="invoice-data total-task-amount">
              Amount
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="columns small-12 medium-2">
            <div class="invoice-data" id="invoice-taskUnit">
            </div>
            
            <div class="columns small-12 medium-6">
              <div class="invoice-data" id="invoice-taskDescription"></div>
            </div>
            <div class="columns small-12 medium-2">
              <div class="invoice-data" id="invoice-taskUnitPrice"></div>
            </div>
            <div class="columns small-12 medium-2">
              <div class="invoice-data" id="invoice-taskAmount"></div>
            </div>
          </div>
          <hr>
          <div class="row taskSubTotalAmount">
            <div class="columns small-12 medium-offset-8 medium-2">
              Subtotal
            </div>
            <div class="columns small-12 medium-2">
              <div class="invoice-data" id="invoice-taskSubTotalAmount"></div>
            </div>
          </div>
          <div class="row taskTaxSubTotalAmount">
            <div class="columns small-12 medium-offset-8 medium-2">
              Taxes
            </div>
            <div class="columns small-12 medium-2">
              <div class="invoice-data" id="invoice-taskTaxSubTotalAmount"></div>
            </div>
          </div>
          <div class="row taskTotalAmount">
            <div class="columns small-12 medium-offset-8 medium-2">
              Total
            </div>
            <div class="columns small-12 medium-2">
              <div class="invoice-data" id="invoice-taskTotalAmount"></div>
            </div>
          </div>
        </fieldset>
        
        <input class="button button-step expanded" type="button" value="Prepare for print" onclick="">
      </div>
    </form>
    
  </div>
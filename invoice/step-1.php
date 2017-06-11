<div class="site-heading-wrapper">
  <h2 class="site-heading site-heading-1 text-center">Lets create Invoice - Step 1</h2>
</div>
<div class="small-12 columns">
  <form class="callout text-center"  id="invoiceForm" action="#" method="post">
    <div class="columns m2 medium-6 large-6 align-center">
      <fieldset>
        <legend>Your details</legend>
        
        <div class="floated-label-wrapper">
          <label for="company-name">Company Name</label>
          <input type="text" id="company-name" name="company name input" placeholder="Company name">
        </div>
        <div class="floated-label-wrapper">
          <label for="full-name">Full name</label>
          <input type="text" id="full-name" name="full name input" placeholder="Full name">
        </div>
        <div class="row floated-label-wrapper">
          <div class="columns small-7 pr0">
            <label for="address-street">Street</label>
            <input type="text" id="address-street" name="address street input" placeholder="Street">
          </div>
          <div class="columns small-2">
            <div class="row">
              <label for="address-street">No.</label>
              <input type="text" id="address-street-no" name="address street-no input" placeholder="Street No.">
            </div>
          </div>
          <div class="columns small-3">
            <label for="address-street">Unit</label>
            <input type="number" id="address-street-no-unit" min="0" name="address street-unit input" placeholder="Unit">
          </div>
        </div>
        <div class="row floated-label-wrapper">
          <div class="columns small-8">
            <label>Select state
              <select>
                <option value="ACT">Australian Capital Territory</option>
                <option value="NSW">New South Wales</option>
                <option value="NT">Northern Territory</option>
                <option value="QLD">Queensland</option>
                <option value="SA">South Australia</option>
                <option value="TAS">Tasmania</option>
                <option value="VIC">Victoria</option>
                <option value="WA">Western Australia</option>
              </select>
            </label>
          </div>
          <div class="columns small-4">
            <label for="address-street-zip">ZIP code</label>
            <input type="text" id="address-street-zip" name="address zip input" placeholder="Street">
          </div>
          
        </div>
        <div class="floated-label-wrapper">
          <label for="country">Country</label>
          <input type="text" id="country" name="country input" placeholder="ABN" value="Australia">
        </div>
        <div class="floated-label-wrapper">
          <label for="abn">ABN</label>
          <input type="text" id="abn" name="abn input" placeholder="ABN">
        </div>
        <p>Your bank account details</p>
        <div class="floated-label-wrapper">
          <label for="bankName">Bank name</label>
          <input type="text" id="bankName" name="bankName input" placeholder="Bank name">
        </div>
        <div class="row floated-label-wrapper">
          <div class="columns small-12 medium-3">
            <label for="bsb">BSB</label>
            <input type="text" id="bsb" name="bsb input" placeholder="BSB">
          </div>
          <div class="columns small-12 medium-9">
            <label for="bankAccount">Bank account number</label>
            <input type="text" id="bankAccount" name="bankAccount input" placeholder="Bank account number">
          </div>
          
        </div>
        <p>Additional details</p>
        <div class="floated-label-wrapper">
          <label for="email">Email</label>
          <input type="email" id="email" name="email input" placeholder="Your email">
        </div>
        <div class="floated-label-wrapper">
          <label for="phone">Phone</label>
          <input type="text" id="phone" name="phone input" placeholder="Your phone number">
        </div>
      </fieldset>
    </div>
    
    <div class="columns medium-6 large-6 align-center">
      <fieldset>
        <legend>Sold to</legend>
        
        <div class="floated-label-wrapper">
          <label for="company-name">Company Name</label>
          <input type="text" id="company-name" name="company name input" placeholder="Company name">
        </div>
        <div class="floated-label-wrapper">
          <label for="full-name">Full name</label>
          <input type="text" id="full-name" name="full name input" placeholder="Full name">
        </div>
        <div class="row floated-label-wrapper">
          <div class="columns small-7 pr0">
            <label for="address-street">Street</label>
            <input type="text" id="address-street" name="address street input" placeholder="Street">
          </div>
          <div class="columns small-2">
            <div class="row">
              <label for="address-street">No.</label>
              <input type="text" id="address-street-no" name="address street-no input" placeholder="Street No.">
            </div>
          </div>
          <div class="columns small-3">
            <label for="address-street">Unit</label>
            <input type="number" id="address-street-no" min="0" name="address street-unit input" placeholder="Unit">
          </div>
        </div>
        <div class="row floated-label-wrapper">
          <div class="columns small-8">
            <label>Select state
              <select>
                <option value="ACT">Australian Capital Territory</option>
                <option value="NSW">New South Wales</option>
                <option value="NT">Northern Territory</option>
                <option value="QLD">Queensland</option>
                <option value="SA">South Australia</option>
                <option value="TAS">Tasmania</option>
                <option value="VIC">Victoria</option>
                <option value="WA">Western Australia</option>
              </select>
            </label>
          </div>
          <div class="columns small-4">
            <label for="address-street-zip">ZIP code</label>
            <input type="text" id="address-street-zip" name="address zip input" placeholder="Street">
          </div>
          
        </div>
        <div class="floated-label-wrapper">
          <label for="abn">Country</label>
          <input type="text" id="abn" name="abn input" placeholder="ABN" value="Australia">
        </div>
        <div class="floated-label-wrapper">
          <label for="abn">ABN</label>
          <input type="text" id="abn" name="abn input" placeholder="ABN">
        </div>
        
        
      </fieldset>
    </div>
    <div class="columns medium-12 align-center">
      <fieldset>
        <legend>Task</legend>
        
        <!-- .columns.small-12.medium-2+.columns.small-12.medium-6+.columns.small-12.medium-2+.columns.small-12.medium-2 -->
        <div class="row">
          
          <div class="columns small-12 medium-2">
            <label for="">
              Quantity
            </label>
          </div>
          <div class="columns small-12 medium-6">
            <label for="taskDescription">
              Description
            </label>
          </div>
          <div class="columns small-12 medium-2">
            <label for="taskUnitPrice">
              Unit Price
            </label>
          </div>
          <div class="columns small-12 medium-2">
            <label for="taskAmount">
              Amount
            </label>
          </div>
        </div>
        <div class="row">
          
          <div class="columns small-12 medium-2">
            <input type="number" id="taskUnit" min="0" name="address taskUnit input" placeholder="Unit">
          </div>
          <div class="columns small-12 medium-6">
            <input type="text" id="taskDescription" name="taskDescription" placeholder="Task Description">
          </div>
          <div class="columns small-12 medium-2">
            <input type="text" id="taskUnitPrice" name="taskUnitPrice" placeholder="Unit price">
          </div>
          <div class="columns small-12 medium-2">
            <input type="text" id="taskAmount" name="taskAmount" placeholder="Amount">
          </div>
        </div>
        <hr>
        <div class="row taskSubTotalAmount">
          <div class="columns small-12 medium-offset-8 medium-2">
            Subtotal
          </div>
          <div class="columns small-12 medium-2">
            <input type="text" id="taskTotalAmount" name="taskAmount" placeholder="Subtotal Amount">
          </div>
        </div>
        <div class="row taskTaxSubTotalAmount">
          <div class="columns small-12 medium-offset-8 medium-2">
            Taxes
          </div>
          <div class="columns small-12 medium-2">
            <input type="text" id="taskTotalAmount" name="taskAmount" placeholder="With Tax">
          </div>
        </div>
        <div class="row taskTotalAmount">
          <div class="columns small-12 medium-offset-8 medium-2">
            Total
          </div>
          <div class="columns small-12 medium-2">
            <input type="text" id="taskTotalAmount" name="taskAmount" placeholder="Total Due">
          </div>
        </div>
      </fieldset>
      
      <input class="round button button-step expanded" type="button" value="Submit & Check before print" onclick="showInvoice();">
    </div>
  </form>
  
</div>
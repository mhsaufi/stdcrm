<div id="create_event_form">
  <div class="row">
    <span>Create new event</span><span class="close-action-icon"><i class="fas fa-times"></i></span>
    <hr>
  </div>
  <div class="row">
    <label>Select Package</label>
    <select class="form-std" id="package">
      <option value=""></option>
      <option value="C">Custom</option>
      @foreach($package_data as $package)
      <option value="{{ $package['package_id'] }}">{{ $package['package_title'] }}</option>
      @endforeach
    </select>
    <br>
    <label>Event Name</label>
    <input type="text" name="we_title" class="form-std" placeholder="event name" id="title"/>
    <label>Description</label>
    <textarea class="form-std" id="description"></textarea><br>
    <label>Address</label>
    <input type="text" name="we_title" class="form-std" placeholder="event venue address" id="address"/>
    <div class="three-inline-box-std">
      <div>
        <label>Date</label>
        <input type='text' class="form-std datepicker-here" data-position="right top" data-language='en' data-date-format='d-m-yyyy' id="date"/>
      </div>
      <div>
        <label>Time Start</label>
        <div class="input-group bootstrap-timepicker timepicker">
          <input id="timepicker" class="form-std" data-provide="timepicker" data-minute-step="1" type="text"/>
        </div>
      </div>
      <div>
        <label>Time End</label>
        <div class="input-group bootstrap-timepicker timepicker">
          <input id="timepicker2" class="form-std" data-provide="timepicker" data-minute-step="1" type="text"/>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <button class="std_btn_cancel" id="cancel_button1">Cancel</button>
    <button class="std-btn" id="reg_event">Add New Event</button> 
  </div>
</div>
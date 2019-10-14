<div id="quick_access_section" style="background: white;">
	<div style="width: 15%;font-size: 15px;cursor: pointer;" id="add_t">
		<span id="add_t_icon"><i class="fas fa-plus"></i></span>
		<span id="add_t_text">Add Timeline</span>
	</div>
  <div style="width: 25%;font-size: 15px;cursor: pointer;" id="inbox">
    <span id="inbox_icon"><i class="far fa-envelope" id="inbox_icon_i"></i></span>
    <span id="inbox_text" class="inbox_sliding_text">Mailbox</span>
  </div>
	<div>
		<span style="opacity: 0.7;">Total <span style="color: green;font-weight: bold;">Active</span> Timeline : </span>
		<span style="font-weight: bold;opacity: 0.7" id="timeline_count"></span>
	</div>
</div>

<!-- alert before ading timeline -->

<!-- ========================================================== Form for creating timeline end -->

<div id="create_timeline_form">
  <div style="width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: flex-start;padding: 10px 20px;">
    <div style="width: 100%;padding: 10px 0;border-bottom: 0.05em solid #d4af37;margin-bottom: 20px;display: flex;flex-direction: row;justify-content: space-between;">
      <div>Add new timeline</div>
      <div><i class="fas fa-times" id="close_add_t"></i></div>
    </div>
    <div id="event_container">
      <label>Choose event</label>
      <select class="form-std" id="event">
        <option value="" selected="selected"></option>

      </select>
    </div> 
    <div style="display: flex;flex-direction: row; justify-content: space-between;">
      <div style="width: 20%;" id="category_container">
        <label>Category</label>
        <select class="form-std" id="category">
          <option value=""></option>

        </select>
      </div>
      <div style="width: 20%;" id="date_container">
        <label>Date & Time</label>
        <input type='text' class="form-std datepicker-here" data-timepicker="true" data-position="right top" data-language='en' data-date-format='d-m-yyyy' id="tdate"/>
      </div>
      <div style="width: 20%;" id="assign_to_container">
        <label>Assign To</label>
        <select class="form-std" id="assign_to">
          <option value="0" id="select_content"></option>
        </select>
      </div>
    </div>
    <div id="subject_container">
      <label>Subject</label>
      <input type="text" class="form-std" name="" id="subject">
    </div>
    <div id="editor_container">
      <textarea id="editor"></textarea>
    </div>
    <div style="display: flex;flex-direction: row;justify-content: flex-end;padding: 10px 0;height: 10%;margin-top: 20px;margin-bottom: 20px;">
      <button class="std_btn_cancel" style="padding: 5px 10px;" id="cancel_add_t">Cancel</button>
      <button class="std-btn" style="padding: 5px 10px;" id="add-timeline-btn">Add Timeline</button>
    </div>
  </div>
</div>


<div id="send_alert">
	<div class="row" style="border-bottom: 0.01em solid #d4af37;">
		<span style="color:red;margin-bottom: 10px;">REMINDER</span>
	</div>
	<div class="row" style="padding-top: 15px;">
		<p>The timeline you just created will need approval from the person you assigned before being displayed.
		<br>Do you wish to proceed?</p>
		<div style="display: flex;flex-direction: row;justify-content: flex-end;width: 100%;">
			<button class="btn-alert" style="" id="proceed_send">Yes, proceed</button>
			<button class="btn-alert-cancel" id="cancel_send">Cancel</button>
		</div>
	</div>
	<div class="row"></div>
</div> 



    /**
	 * jQuery Class containing all plugin functions
	 */
jQuery.Class('Vtiger_KnowlarityPlugin_Js',{},{


	notyDefault : function() {
		  $.noty.defaults = {
		    layout: 'topRight',
		    theme: 'relax', // or 'defaultTheme'
		    type: 'info',
		    text: '', // can be html or string
		    dismissQueue: true, // If you want to use queue feature set this true
		    template: '<div class="noty_message"><span class="noty_text"><span class="glyphicon glyphicon-remove"></span></span><div class="noty_close"></div></div>',
		    animation: {
		      open: {
		        height: 'toggle'
		      }, // or Animate.css class names like: 'animated bounceInLeft'
		      close: {
		        height: 'toggle'
		      }, // or Animate.css class names like: 'animated bounceOutLeft'
		      easing: 'swing',
		      speed: 500 // opening & closing animation speed
		    },
			    timeout: false, // delay for closing event. Set false for sticky notifications
			    force: true, // adds notification to the beginning of queue when set to true
			    modal: false,
			    maxVisible: 10, // you can set max visible notification for dismissQueue true option,
			    killer: false, // for close all notifications before show
			    callback: {
			      onShow: function() {},
			      afterShow: function() {},
			      onClose: function() {},
			      afterClose: function() {},
			      onCloseClick: function() {},
			    },
			  };
		},

		    Vtiger_setup : function(callback) {

		  			//initilaize vtiger after login

			  var url = window.location.href.split('/index.php')[0];
			  client = new Vtiger_WSClient(url);
			  username=sessionStorage.getItem('user_name');
			  accessKey = sessionStorage.getItem('accessKey');
			  if (!callback) {
			    callback = function() {
			    //do nothing;
			    };
			  }
			  client.doLogin(username, accessKey, callback);
		},

		change_notification : function(message, noty_object, data) {
			var thisInstance = this;
			  if (!noty_object) {
			    return;
			  }
			  thisInstance.notyDefault(data.uuid);
			  noty_object.setText(message);
			  sessionStorage.setItem(data.uuid, JSON.stringify(data));
		},
		 createLead : function(ticket_activity){
				    //create a lead
				var thisInstance = this;
			    client.doCreate('Events', ticket_activity, function(result){
			    thisInstance.afterCreateRecord();
			          // client.doCreate('ModComments', valuesmap, bridgeActivityHandler);
			        });
		  },

		  afterCreateRecord : function() {
		    // after lead creation clear local storage
		    localStorage.removeItem('hangup');
		    localStorage.removeItem('active');
		    localStorage.removeItem('update_ticket');
		  },

		popup_action : function(message, data){
		  // handles the changing of popup as per events
		    var thisInstance = this;
		    noty_object = $.noty.get(sessionStorage.getItem('not-' + data.uuid));
		    if (noty_object) {
		        thisInstance.change_notification(message, noty_object, data);
		      }

  		},

	    create_notification : function(message, data) {
	    	  var that = this;
			  that.notyDefault(data.uuid);
			  var n = noty({
			    text: message
			  });
			  localStorage.setItem('active','yes');
			  sessionStorage.setItem(data.uuid, JSON.stringify(data));
			  sessionStorage.setItem('not-' + data.uuid, n.options.id);
			  globalnoty = n.options.id;
			  return n;
		},

		

		cleanStorage : function(uuid){
			  localStorage.removeItem('active');
			  localStorage.removeItem('comments');
			  localStorage.removeItem('contact_id');
			  localStorage.removeItem('contact_type');
			  localStorage.removeItem('description');
			  localStorage.removeItem('subject');
			  localStorage.removeItem('ticket_title');
			  sessionStorage.removeItem('modal');
			  sessionStorage.removeItem(uuid);
		},

		hangup : function(message, noty_object, uuid) {
				  // cleanup on hangup
				  var thisInstance = this;
				  thisInstance.cleanStorage(uuid);
				  if (!noty_object) {
				    return;
				  }
				  setTimeout(function() {
				    $("#" + noty_object.options.id).html(message)
				  }, 4000);
				  noty_object.close();
		},
 		
 		savedata : function(){
 			var thisInstance = this;
		 	localStorage.setItem("comments",$("#comment").val());
		 	status=$("input[name=callaction]:checked").val();
		 	$("#note-modal-close").click();
		 	thisInstance.bridgeResultFunc(status, callID);
		},


		getCall : function(data) {
		  //event handeler

		  var thisInstance = this;
		  trackedCall = JSON.parse(sessionStorage.getItem(data.uuid));
		  if (trackedCall && data.uuid == trackedCall.uuid && data.type == trackedCall.type) {
		    return false;
		  } else {
		    try {
		        $.noty.get(sessionStorage.getItem('login')).close();
		      }
		    catch (err) {

		    }
		    switch (data.type) {
		      case "ORIGINATE":
		        // new call notification publish it
		        if (localStorage.getItem('active') == 'yes'){

		          return;
		        }

		        callID = data.uuid;
		        callState = data.type;

		        from = data.contact_name;

		        if (from == ''){
		          from = data.caller
		        }
		        contactID = data.contact_id.split('x')[1];
		        contact_id = data.contact_id;
		        baseURL = window.location.href.split('index.php')[0];
		        if (data.contact_type == 'contact' ){
		        contactURL = baseURL + 'index.php?module=Contacts&view=Detail&record=' + contactID;
		        fromURL = '<a href=' + contactURL + '>' + from + '</a>';
		        }
		        else if(data.contact_type == 'lead'){
		        contactURL = baseURL + 'index.php?module=Leads&view=Detail&record=' + contactID;
		        fromURL = '<a href=' + contactURL + '>' + from + '</a>';
		        }
		        else{
		          fromURL = from;
		        }
		        // contactURL = baseURL + 'index.php?module=Contacts&view=Detail&record=' + contactID;
		        // from = '<a href=' + contactURL + '>' + from + '</a>';
		        businessNumber = data.k_number;
		        //var message = '<b>Call ID: </b>' + callID + '<br>' + '<b>State: </b>' + callState + '<br>' + '<b>From: </b>' + from
		        var message = '<b>Incoming call <b><br>' + '<b>From: </b>' + from + '<br> <b>Knowlarity Number: <b>' + data.k_number + '<br>'

		        var message =
		'<div class="">' +
		    '<div class="knwlrt-content">' +
		        '<div class="knwlrt-icon-incoming-call"></div>' +
		        '<div class="knwlrt-c2">' +
		            '<div class="knwlrt-row">' +
		                '<div class="knwlrt-label">Incoming Call from</div>' +
		                '<div class="knwlrt-text">Caller: '+ fromURL +'</div>' +
		            '</div>' +
		            '<div class="knwlrt-row">' +
		                '<div class="knwlrt-label">Knowlarity Number</div>' +
		                '<div class="knwlrt-text">' + data.k_number + '</div>' +
		            '</div>' +
		        '</div>' +
		        '<div class="knwlrt-button-box">' +
		    '<button class="knwlrt-hide-button">Hide</button>'  +
		        '</div>' +
		      '<div class="knwlrt-powered-by">Powered by knowlarity</div>' +
		    '</div>' +
		'</div>';


		        var x = thisInstance.create_notification(message, data);

		        $(".knwlrt-hide-button").on('click', function() {
		          var $noty = x;
		          for (var obj in sessionStorage) {
		            if (sessionStorage.getItem(obj) == $noty.options.id) {
		              $('#note-modal-close').click();
		              sessionStorage.removeItem(obj);
		              localStorage.removeItem('active');
		              sessionStorage.removeItem(obj.split('not-')[1]);
		            }
		          }
		          fg = $noty;
		          sessionStorage.removeItem($noty.options.uuid);
		          sessionStorage.removeItem('not-' + $noty.options.uuid);
		          thisInstance.cleanStorage(null);
		          $noty.close();
		        });

		        $('#'+x.options.id).addClass('knowlarity_css_reset_root  knwlrt-incomingbox knwlrt-container');
		        break

		        case "AGENT_CALL":
		        // event for calling agent for c2c
		            var message =
		                '<div class="">' +
		                '<div class="knwlrt-content">' +
		                '<div class="knwlrt-icon-incoming-call"></div>' +
		                '<div class="knwlrt-c2">' +
		                '<div class="knwlrt-row">' +
		                '<div class="knwlrt-label">Outbound Call</div>' +
		                '<div class="knwlrt-text">Call Placed to Agent: '+ data.called +'</div>' +
		                '</div>' +
		                '<div class="knwlrt-row">' +
		                '<div class="knwlrt-label">Business Number</div>' +
		                '<div class="knwlrt-text">' + data.k_number + '</div>' +
		                '</div>' +
		                '</div>' +
		                '<div class="knwlrt-button-box">' +
		                '</div>' +
		                '<div class="knwlrt-powered-by">Powered by knowlarity</div>' +
		                '</div>' +
		                '</div>';
		            localStorage.setItem('outbound','active');
		            var n = thisInstance.create_notification(message, data);
		            $('#' + n.options.id).addClass('knowlarity_css_reset_root  knwlrt-incomingbox knwlrt-container');
		            break

		        case "AGENT_ANSWER":
		        // event for agent answered the call
		            var message =
		                '<div class="">' +
		                '<div class="knwlrt-content">' +
		                '<div class="knwlrt-icon-incoming-call"></div>' +
		                '<div class="knwlrt-c2">' +
		                '<div class="knwlrt-row">' +
		                '<div class="knwlrt-label">Outbound Call</div>' +
		                '<div class="knwlrt-text">Call Answered by Agent '+ data.called +'</div>' +
		                '</div>' +
		                '<div class="knwlrt-row">' +
		                '<div class="knwlrt-label">Business Number</div>' +
		                '<div class="knwlrt-text">' + data.k_number + '</div>' +
		                '</div>' +
		                '</div>' +
		                '<div class="knwlrt-button-box">' +
		                '</div>' +
		                '<div class="knwlrt-powered-by">Powered by knowlarity</div>' +
		                '</div>' +
		                '</div>';
		            thisInstance.popup_action(message, data);
		            break;

		        case "CUSTOMER_CALL":
		        // event customer is getting called
		            var message =
		                '<div class="">' +
		                '<div class="knwlrt-content">' +
		                '<div class="knwlrt-icon-incoming-call"></div>' +
		                '<div class="knwlrt-c2">' +
		                '<div class="knwlrt-row">' +
		                '<div class="knwlrt-label">Outbound Call</div>' +
		                '<div class="knwlrt-text">Call Placed to Customer ' + data.contact_name + ' ' + data.customer_number  +'</div>' +
		                '</div>' +
		                '<div class="knwlrt-row">' +
		                '<div class="knwlrt-label">Business Number</div>' +
		                '<div class="knwlrt-text">' + data.k_number + '</div>' +
		                '</div>' +
		                '</div>' +
		                '<div class="knwlrt-button-box">' +
		                '</div>' +
		                '<div class="knwlrt-powered-by">Powered by knowlarity</div>' +
		                '</div>' +
		                '</div>';
		            thisInstance.popup_action(message, data);
		            break;

		        case "CUSTOMER_ANSWER":
		        // event customer answered the call
		              var message =
		                '<div class="">' +
		                '<div class="knwlrt-content">' +
		                '<div class="knwlrt-icon-incoming-call"></div>' +
		                '<div class="knwlrt-c2">' +
		                '<div class="knwlrt-row">' +
		                '<div class="knwlrt-label">Outbound Call</div>' +
		                '<div class="knwlrt-text">Call Answered by Customer '+ data.contact_name + ' ' + data.customer_number +'</div>' +
		                '</div>' +
		                '<div class="knwlrt-row">' +
		                '<div class="knwlrt-label">Business Number</div>' +
		                '<div class="knwlrt-text">' + data.k_number + '</div>' +
		                '</div>' +
		                '</div>' +
		                '<div class="knwlrt-button-box">' +
		                '</div>' +
		                '<div class="knwlrt-powered-by">Powered by knowlarity</div>' +
		                '</div>' +
		                '</div>';
		            thisInstance.popup_action(message, data);
		            break;


		      case "HANGUP":
		      // call is dissconnected
		        if (sessionStorage.getItem('modal') == 'active') {
		          return
		        }

		        callID = data.uuid;
		        callState = data.type;
		        from = data.contact_name;
		        ticket_activity = data.activity_valuemap;
		        ticket_activity.subject = 'Call Recording';
		        localStorage.setItem('activity', JSON.stringify(ticket_activity));
		        businessNumber = data.k_number;
		        var message = '<b>Call ID: </b>' + callID + '<br>' + '<b>State: </b>' + callState + '<br>' + '<b>From: </b>' + from
		        noty_object = $.noty.get(sessionStorage.getItem('not-' + data.uuid));
		        if (noty_object) {
		          thisInstance.hangup(message, noty_object, data.uuid);

		        }
		        localStorage.removeItem('active');
		        localStorage.removeItem('outbound');
		        break

		      case "BRIDGE":
		      // agent and customer are taking
		        if (localStorage.getItem('outbound') == 'active') {
		          return
		        }
		        if (data.callee != localStorage.getItem('agentnumber')) {
		          sessionStorage.removeItem(data.uuid);
		          id = sessionStorage.getItem('not-' + data.uuid);
		          $.noty.close(id);
		          sessionStorage.removeItem(id);
		          break
		        }
		        var parms = {};
		        parms.uuid = data.uuid;
		        parms.id = data.konnect_id.toString();
		        localStorage.setItem('hangup','pending');
		        callID = data.uuid;
		        callState = data.type;
		        from = data.contact_name;
		        if (from == ''){
		          from = data.caller
		        }
		        to = data.callee;
		        ticket_title = 'Inbound Call | Customer Number: ' + from ;
		        localStorage.setItem('ticket_title',ticket_title);
		        contactID = data.contact_id.split('x')[1];
		        localStorage.setItem('contact_id',data.contact_id)
		        localStorage.setItem('contact_type',data.contact_type)
		        localStorage.setItem('subject',data.subject_line)
		        localStorage.setItem('description',data.ticket_description)
		        baseURL = window.location.href.split('index.php')[0];
		        if (data.contact_type == 'contact' ){
		        contactURL = baseURL + 'index.php?module=Contacts&view=Detail&record=' + contactID;
		        fromURL = '<a href=' + contactURL + '>' + from + '</a>';
		        }
		        else if(data.contact_type == 'lead'){
		        contactURL = baseURL + 'index.php?module=Leads&view=Detail&record=' + contactID;
		        fromURL = '<a href=' + contactURL + '>' + from + '</a>';
		        }
		        else{
		          fromURL = from;
		        }
		        businessNumber = data.k_number;

		        var message =
		        '<div class="">' +
		            '<div class="knwlrt-content">' +
		                '<div class="knwlrt-icon-call-id"></div>' +
		                '<div class="knwlrt-c2">' +
		                    '<div class="knwlrt-row knwlrt-h">' +
		                        '<div class="knwlrt-label">Call Id</div>' +
		                        '<div class="knwlrt-text" style="word-wrap: break-word;">' + callID + '</div>' +
		                    '</div>' +
		                    '<div class="knwlrt-row knwlrt-h">' +
		                        '<div class="knwlrt-label">State</div>' +
		                        '<div class="knwlrt-text">' + callState + '</div>' +
		                    '</div>' +
		                    '<div class="knwlrt-row">' +
		                        '<div class="knwlrt-label">From</div>' +
		                        '<div class="knwlrt-text">' + fromURL + '</div>' +
		                    '</div>' +
		                    '<div class="knwlrt-row">' +
		                        '<div class="knwlrt-label">Called</div>' +
		                        '<div class="knwlrt-text">' + to + '</div>' +
		                    '</div>' +
		                '</div>' +
		                '<div class="knwlrt-button-box">' +
		          '<button id="ticketBtn" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Handle Call</button>' +
		                    '<button class="knwlrt-hide-button">Hide</button>'  +
		                '</div>' +
		                '<div class="knwlrt-powered-by">Powered by knowlarity</div>' +
		            '</div>' +
		        '</div>';

		  var addNotes = '<!-- Modal --><div class="modal fade" id="myModal" role="dialog"><div class="modal-dialog"><!-- Modal content--><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Ticket</h4></div><div class="modal-body"><div class="container-notes"><h2>Add Notes</h2><form role="form"><div class="form-group"><label for="comment">Note:</label><textarea class="form-control" rows="5" id="comment"></textarea><div class="radio"><label><input type="radio" name="callaction" value="new" checked="checked">Create New Call</label></div><div class="radio"><label><input type="radio" name="callaction" value="ignore">Ignore Call</label></div></div><button id="ticket_action" type="button" class="btn btn-default">Submit</button></form></div></div><div class="modal-footer"><button id="note-modal-close" type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></div>';
   
		$('body').append(addNotes);
		$('body').on('click', '#ticket_action',function(){
				thisInstance.savedata();
		});
		        noty_object = $.noty.get(sessionStorage.getItem('not-' + data.uuid));
		        if (noty_object) {
		          thisInstance.change_notification(message, noty_object, data);
		  $('#'+noty_object.options.id)
		    .addClass('knowlarity_css_reset_root knwlrt-ticketbox knwlrt-container')
		    .find('.noty_buttons')
		    .remove();

		$('#'+noty_object.options.id).find('.knwlrt-hide-button').on('click', function() {
		          var $noty = noty_object;
		          for (var obj in sessionStorage) {
		            if (sessionStorage.getItem(obj) == $noty.options.id) {
		              $('#note-modal-close').click();
		              sessionStorage.removeItem(obj);
		              localStorage.removeItem('active');
		              sessionStorage.removeItem(obj.split('not-')[1]);
		            }
		          }
		          fg = $noty;
		          sessionStorage.removeItem($noty.options.uuid);
		          sessionStorage.removeItem('not-' + $noty.options.uuid);
		          $noty.close();
		          thisInstance.cleanStorage(null);
		        });
		        }
		        break
		    }
		  }
		$("body").on("click", "#ticketBtn", function() {
				// send a ack to clint saying not to handel call creation from server as gent is handeling the call
							var parms = {};
							sessionStorage.setItem('modal','active');
							parms.uuid = trackedCall.uuid;
							parms.id = trackedCall.konnect_id;
							if (parms.uuid) {
								jQuery.ajax({
								    type: "POST",
								    url: this.konnectClientackEndpoint,
								    cache: false,
								    data: parms,
								    success: function(response) {
								      console.log(response);
								    },
								    error: function(response) {
								      console.log("Failed" + JSON.stringify(response));
								    }
								  });
							}
					    return false;
		});

		},
			bridgeResultFunc : function(status, uuid) {
		  			//bridge event's result handler if the agent wants to take notes for the call
		  			var thisInstance = this;
				  contact_type = localStorage.getItem('contact_type');
				  contact_id = localStorage.getItem('contact_id');
				  ticket_title = localStorage.getItem('subject');
				  trackedCall = JSON.parse(sessionStorage.getItem (uuid));
				  var now = new Date();
				  var desc = localStorage.getItem('comments');
				  description = localStorage.getItem('description')+'Comments: ' + desc ;;

				  
				  if (status == 'new') {
				        thisInstance.Vtiger_setup(function() {
				        ticket_activity = JSON.parse(localStorage.getItem('activity'));
				        ticket_activity.subject = ticket_title;
				        ticket_activity.description = description;
				        if (contact_type == 'contact'){
				          ticket_activity.contact_id = contact_id;
				          thisInstance.createLead(ticket_activity)
				        }
				        else if (contact_type == 'lead'){
				          ticket_activity.parent_id = contact_id;
				          thisInstance.createLead(ticket_activity)
				        }
				        else{

				          lead_arguments = {'lastname': customer_number.toString(), 'phone': customer_number, 'assigned_user_id': null}
				          client.doCreate('Leads', lead_arguments, function(result){
				          ticket_activity.parent_id = result.id;
				          thisInstance.createLead(ticket_activity)
				          });
				        }          
				      });
				    }

				  else if (status == 'activity') {
				      valuesmap = {};
				    }

				  else {
				      alert('Call is Now Completed');
				    }
				  // createActivity();
				  id = 'not-' + uuid;
				  noty_id = sessionStorage.getItem(id);
				  noty_uuid = $.noty.get(noty_id);
				  if (noty_uuid) {
				    noty_uuid.close();
				  }
				  thisInstance.cleanStorage(uuid);
		  },
    initialize : function() {
    	var thisInstance = this;
        kNumber = localStorage.getItem('knumber');
      	agentNumber = localStorage.getItem('agentnumber');
  
        localStorage.removeItem('outbound');
	    localStorage.removeItem('active');
        localStorage.removeItem('modal');
        if (kNumber && agentNumber) {
         thisInstance.clickToCall();
         thisInstance.connection(kNumber,agentNumber);
      
        }
    },

    clickToCall : function() {
     	var thisInstance = this;
    // Place click to call
    if ($('#kc2c').length != 0) {
      return;
    }

    var number_class = $(".value")
    $.each(number_class, function(index, value) {
      var number_node = value;
      var number = number_node.textContent;
      if (parseInt(number.trim())) {
        var number = number.replace('+', '');
        number = number.replace('-', '');
        number = number.replace('(', '');
        number = number.replace(')', '');
        if ($.isNumeric(number) && number.length > 9) {
          var r = $('<input type="button" class="btn btn-primary btn-lg pull-right" id="kc2c" value="Call"/>');
          r.appendTo(number_node);
        }
      }
    });

    $('#kc2c').on('click', function(error) {
      
      var customer = '+' + $('#kc2c').parent().text().replace(/\D+/g, "");
      var agent = '+' + localStorage.getItem('agentnumber').replace(/\D+/g, "");
      knowlarityAPIKey = sessionStorage.getItem('key');
      knowlarityNumber = sessionStorage.getItem('number');
      if (!knowlarityAPIKey) {
        noty({
          text: "Sorry You don't have access for this, Please ask your administrator for the access"
        });
      }
      //var data = {phone_number: customer, agent_number: agent, sr_number: knowlarityNumber, api_key: knowlarityAPIKey, response_format: 'json'};
      var data = {
        customer: customer,
        agent: agent,
        knumber: knowlarityNumber,
        api_key: knowlarityAPIKey,
        integration: 'vtiger',
        response_format: 'json'
      };
      if (!agent && !knumber) {
        thisInstance.loginWindow();
        return;
      }

      if (!customer) {
        thisInstance.notyDefault();
        noty({
          text: "Unable to get Destination Number"
        });
        return;
      }

      $.ajax({
        //knowlarity make call api to be called with the agent and sr number
        type: "GET",
        url: "https://konnect.knowlarity.com/konnect/makecall/",
        dataType: 'jsonp',
        jsonpCallback: "thisInstance.jsonpCallback",
        crossDomain: true,
        cache: false,
        data: data,
        success: function(response) {
          if (response.error) {
            thisInstance.notyDefault();
            noty({
              text: "Call failed. Error: " + response.error.message,
              closeWith: ['click'],
              timeout: 10
            });
          } else if (response.success) {
            thisInstance.notyDefault();
            noty({
              text: "Call placed between <b>" + agent + "</b> and <b>" + customer + "</b>.",
              closeWith: ['click'],
              timeout: 10

            });
          } else {
            thisInstance.notyDefault();
            noty({
              text: response,
              closeWith: ['click'],
              timeout: 10

            });
          }
        }
      });
    	event.stopPropagation();
    });
  },

   connection :  function(kNumber,agentNumber) {
 
    // nodejs connection to the knowlarity
    var that = this;
    key=sessionStorage.getItem("key");
    agentNumber = agentNumber.slice(-10);
    source = new EventSource(this.konnectPopupEndpoint + key + '/vtiger/' + agentNumber);
    
    source.onmessage = function(event) {
      // handle incoming events
      var data = JSON.parse(event.data);
      that.getCall(data);
    }
  },

	disconnect : function() {
    	source.close();
  	},

    disablec2c : function() {
    	
	      // Disable click to call
	    while ($('#kc2c').length) {
	      $('#kc2c').remove()
	    }
  },

   jsonpCallback : function(res) {
   	
     return res;
   },

	
      
    /*
	 * Function to initialize cliclToCall and initiate nodejs connection
	*/
    getSessionData : function(number,record) {
    	
        var xhttp = new XMLHttpRequest();
      	try {
      		var thisInstance = this;
      		var userId=jQuery('#current_user_id').val();
      		if(userId){
			     	var loc=window.location.href.split('/index.php')[0]+"/index.php?module=KnowlarityPlugin&action=Details&id="+userId;
      			xhttp.onreadystatechange = function() {
       			if (xhttp.readyState == 4 && xhttp.statusText == "OK") {
                	sessionVars=jQuery.parseJSON(xhttp.responseText)
          			res=sessionVars.result.feed.response.split(",");
          			sessionStorage.setItem('key',res[0]);
          			sessionStorage.setItem('number',res[1]);
          			sessionStorage.setItem('user_name',res[2]);
          			sessionStorage.setItem('accessKey',res[3]);
          			sessionStorage.setItem('tz',res[4]);
          			thisInstance.initialize();
      			}
      			}
      		} else {
     				 var n = noty({
        			text: 'Unable to initialize plugin.Please send mail to konnect@knowlarity.com'
      				});
     
    		 }
    
       xhttp.open("GET", loc, true);
       xhttp.send();
    
	   } catch(e) { 
    	     var n = noty({
           text: "Exception occurred while initializing.Please send mail to konnect@knowlarity.com with details"
        });
		
	     }
    },
		  

	    loginWindow : function() {
		  // plugin login window 
		  var that = this;
		  that.notyDefault();
		  if (localStorage.getItem('active')) { return;}
		  if ($('#knowlarityloginactive').length) {
		    return;
		  }
		  var ltext = (!localStorage.getItem('knumber') || !localStorage.getItem('agentnumber')) ? 'Login' : 'Logout';
		    var form =
		   '<div class="knwlrt-content">' +
		   '<div><h2 id="knowlarityloginactive">Knowlarity</h2></div>'+
		   '<div class="knwlrt-powerofvoice">Power of voice</div>' +
		   '<div class="knwlrt-row">' +
		     '<div><label class="knwlrt-label" for="number">Business Number</label></div>' +
		     '<div><input type="text" class="form-control" id="knumber" placeholder="Enter Knowlarity Number"></div>' +
		   '</div>' +
		   '<div class="knwlrt-row">' +
		     '<div><label for="number" class="knwlrt-label">Agent Number:</label></div>' +
		     '<div><input type="text" class="form-control" id="agentnumber" placeholder="Enter Agent Number"></div>' +
		   '</div>' +
		   '<div class="knwlrt-button-box">' +
		     '<button id="submitBtn">' + ltext + '</button>' +
		     '<button id="cancelBtn">Cancel</button>' +
		   '</div>' +
		       '<div class="knwlrt-powered-by">Powered by knowlarity</div>' +
		   '</div>';





		  var button = []
		    //noty({text: form, buttons: button});
		  var login = noty({
		    text: form,
		    buttons: button
		  });

		  $('#'+login.options.id)
		    .addClass('knowlarity_css_reset_root knwlrt-loginbox knwlrt-container')
		    .find('.noty_buttons')
		    .remove();

		  $('#knumber').attr("value", localStorage.getItem('knumber'));
		  $('#agentnumber').attr("value", localStorage.getItem('agentnumber'));
		  sessionStorage.setItem('login', login.options.id);


		  $('#submitBtn').on('click', function(error) {
		    //trigger when user logins
		    if ($('#submitBtn').text() == 'Logout') {
		      localStorage.removeItem('knumber');
		      localStorage.removeItem('agentnumber');
		      that.disconnect();
		      that.disablec2c();
		      $.noty.get(sessionStorage.getItem('login')).close();
		    } else {
		      var knumber = $('#knumber').val();
		      var agentNumber = $('#agentnumber').val();
		      if (knumber && agentNumber) {
		        localStorage.setItem('knumber', knumber);
		        localStorage.setItem('agentnumber', agentNumber);
		      }
		      $.noty.get(sessionStorage.getItem('login')).close();

		      that.clickToCall();
		      that.connection($('#knumber').val(),$('#agentnumber').val());
		    }
		  });

		  $('#cancelBtn').on('click', function(error) {
		    $.noty.get(sessionStorage.getItem('login')).close();
		    sessionStorage.removeItem('login');
		  })
		},

    
     registerEvents : function(){
     	
     	var thisInstance = this;
        this.konnectPopupEndpoint = 'https://konnect.knowlarity.com:8100/update-stream/';
		this.knowlarityServerUrl = 'https://konnect.knowlarity.com';
		this.konnectClientackEndpoint = this.knowlarityServerUrl+'/konnect/client_ack/';
        var template_css = '<link rel="stylesheet" type="text/css" href="https://s3-ap-southeast-1.amazonaws.com/knowlarity-integrations/vstyle+(1).css" />';
    	$('head').append(template_css);
    	menu = $('#largeNav.modulesList')
    	var notification = '<li class="tabs"><a id="menubar_item_notification"  class ="menubar_notification" href="#" ><strong>Knowlarity Notifications</strong></a></li>'
  
    	if (!$('#menubar_item_notification').length) {
    		
     	 menu.append(notification);
     	 
    	}
    	menu.on('click','.menubar_notification',function(){
    		thisInstance.loginWindow();
    	});
    	thisInstance.getSessionData(thisInstance.initialize);
       
     }
         
});

//On Page Load
jQuery(document).ready(function() { 

	var instance = new Vtiger_KnowlarityPlugin_Js();
    instance.registerEvents();


});

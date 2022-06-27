function input_toggle() {
  var triggers = document.getElementsByClassName('toggle-trigger');

  for (let index = 0; index < triggers.length; index++) {

    triggers[index].addEventListener('change', function (event) {
      const trigger = this;
      const trigger_value = trigger.getAttribute('data-value') ?? trigger.getAttribute('value') ?? trigger.options[trigger.selectedIndex].value;
      console.log(trigger_value)

      var targets = document.getElementsByClassName(`toggle-target ${trigger.dataset.group}`);
      for (let index = 0; index < targets.length; index++) {
        const target = targets[index];
        const target_lookup = target.dataset.lookup;

        if(target_lookup != undefined && target_lookup != null) {
          if(target_lookup == trigger_value) {
            target.setAttribute("data-value", "show");
            continue;
          }
        } else if (target.dataset.default != trigger_value) {
          target.setAttribute("data-value", "show");
          continue;
        }

        target.setAttribute("data-value", "hide");
      }
    });
  }
}

function tab_panel_toggle() {
  var tab_btns = document.querySelectorAll(".tab-pane .tab-pane-btn");

  for (let index = 0; index < tab_btns.length; index++) {
    const tab_btn = tab_btns[index];
    
    tab_btn.addEventListener('click', function (event) {
      var tab = document.querySelector(".nav-link[href='" + tab_btn.dataset.tab + "']");

      tab = new bootstrap.Tab(tab);
      tab.show();
    })
    
  }
}

function file_input_action() {
  var inputs = document.getElementsByClassName("custom-file-input");

  for (let index = 0; index < inputs.length; index++) {
    const input = inputs[index];

    input.addEventListener('change', function (event) {
      var file_name = this.value.split('\\').pop();
      if (file_name) {
        var label = document.querySelector("label.custom-file-label[for='" + this.id + "']");
        label.innerHTML = file_name;
      }
    })
    
  }
}

window.onload = function () {
  // Show and Hide follow up inputs based on another inputs action
  input_toggle();

  // Toogle between tab panes - additional functionality to boostrap tabs
  tab_panel_toggle();

  // Updating the file input label
  file_input_action();

}
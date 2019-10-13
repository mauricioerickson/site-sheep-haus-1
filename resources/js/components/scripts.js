import $ from "jquery";
import "bootstrap-3-typeahead";

var route = $("#course_id").data("route");
$("#course_id").typeahead({
  source: function(term, process) {
    return $.get(route, { term: term }, function(data) {
      return process(data);
    });
  }
});

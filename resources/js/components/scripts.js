import $ from "jquery";
import "bootstrap-3-typeahead";

var course = $("#course_id").data("route");
$("#course_id").typeahead({
  source: function(term, process) {
    return $.get(course, { term: term }, function(data) {
      return process(data);
    });
  }
});

var college = $("#college_id").data("route");
$("#college_id").typeahead({
  source: function(term, process) {
    return $.get(college, { term: term }, function(data) {
      return process(data);
    });
  }
});

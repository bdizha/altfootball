/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var TermsViewModel = function(){
        self = this;

        self.selected = ko.observable('');
        self.select = function(section){
            if(self.selected() === section){
                self.clear();
            }
            else{
                self.selected(section);
            }
        };

        self.clear = function(){
            self.selected('');
        };
    };

    ko.components.register('terms', {
        viewModel: TermsViewModel,
        template: {element: 'terms-template'}
    });
});
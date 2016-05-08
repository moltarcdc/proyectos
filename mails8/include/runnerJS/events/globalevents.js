
Runner.pages.PageSettings.addPageEvent('global',Runner.pages.constants.PAGE_MENU,"afterInit",function(pageObj,proxy,pageid){$("a[id^='logoutButton']").click(function(){window.close();});;});
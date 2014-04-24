
/*********************************************************************************************************/
/**
 * FCKeditor Highslide JS Plugin For Fckeditor (Author: Lajox ; Email: lajox@19www.com)
 * version:	 1.2
 * Released: On 2009-12-15
 * Download: http://code.google.com/p/lajox
 */
/*********************************************************************************************************/

Highslide Plugin For FCKeditor:

Add Description:

1. Upload highslide folder to  fckeditor/editor/plugins 

2. Modify fckeditor/fckconfig.js Content:
    Increase the line of code:
		FCKConfig.Plugins.Add( 'highslide','en,zh-cn') ;  //Highslide JS Plugin
    
3. Add a value 'HighSlide' to FCKConfig.ToolbarSets

4. Modify fckeditor/editor/plugins/highslide/js/main.js Content:
   Just the line: 
	hs.graphicsDir = '/editor/fckeditor/editor/plugins/highslide/js/graphics/';

============================================================



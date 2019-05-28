SyntaxHighlighter.brushes.Idl = function()
{
  // Contributed by Travis Whitton

  var funcs = ':arglists :doc :file :line :macro :name :ns :private :tag :test new alias alter ' +
              'and apply assert class cond conj count def defmacro defn defstruct deref do '     +
              'doall dorun doseq dosync eval filter finally find first fn gen-class gensym if '  +
              'import inc keys let list loop map ns or print println quote rand recur reduce '   +
              'ref repeat require rest send seq set sort str struct sync take test throw '       +
              'trampoline try type use openr readu var vec';
			  
  var keywords = ' when while for plot endfor endif endelse end then begin';
  
  var ops = '';

  this.regexList = [
          { regex: new RegExp(';.*$', 'gm'),                               css: 'comments' },
          { regex: SyntaxHighlighter.regexLib.multiLineDoubleQuotedString, css: 'string' },
          { regex: new RegExp(this.getKeywords(keywords), 'gm'),           css: 'keyword' },
          { regex: /'[a-z][A-Za-z0-9_\-]*/g,                               css: 'color1' }, // symbols
          { regex: /:[a-z][A-Za-z0-9_\-]*/g,                               css: 'color2' }, // keywords
          { regex: new RegExp(this.getKeywords(funcs), 'gmi'),             css: 'functions' }
      ];

  this.forHtmlScript(SyntaxHighlighter.regexLib.aspScriptTags);
}

SyntaxHighlighter.brushes.Idl.prototype     = new SyntaxHighlighter.Highlighter(); 
SyntaxHighlighter.brushes.Idl.aliases       = ['idl', 'Idl', 'IDL'];
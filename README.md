# Description

This repository contains yet another language detector class for PHP language.

It is however different from existing solutions. Instead of relying on statistical aspects of analyzed texts,
and detecting the most frequent language in the text, it tries to detect just the presence of given language.

There are 2 practical differences:

1. It can properly **detect presence of given language (mostly polish language) in mixed-language text**, even if majority of that text is in different language(s).

2. It works much faster than other solutions, especially when searching only for contents in specific language (again, mostly polish).


# Compatibility

This code is 100% compatible with PHP 5.0 or later.

It should work without any modification in any PHP environment, including hosting servers with custom-restricted versions of PHP.


# Similar solutions

This particular class is written and optimized particularly for detecting polish contents in multi-language websites.

If you're looking for more generic language analysis solution, supporting more languages, take a look at these projects:

- https://github.com/pear/Text_LanguageDetect
- https://github.com/patrickschur/language-detection
- https://github.com/landrok/language-detector
- https://github.com/webmil/text-language-detect


# How to contribute

We are welcome to contributions of any kind: bug fixes, support for new languages etc.

If you want to contribute:
- fork this repository and clone it to your machine
- create a feature branch and do the change inside it
- push your feature branch to github and create a pull request


# License

|                      |                                             |
|:---------------------|:--------------------------------------------|
| **Author:**          | Tomasz Klim (<tomasz.klim@polskie.ai>)      |
| **Copyright:**       | Copyright 2022-2024 Tomasz Klim, Polskie.AI |
| **License:**         | MIT                                         |

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

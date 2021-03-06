/*!
 * TableExport.js v3.3.5 (https://www.travismclarke.com)
 * Copyright 2016 Travis Clarke
 * Licensed under the MIT license
 */
! function(t, e) {
    "function" == typeof define && define.amd ? define([
        "exports",
        "jquery",
        "blobjs",
        "file-saverjs",
        "xlsx-js"
    ], e) : "object" == typeof
    exports && "string" != typeof
    exports.nodeName ? e(exports, require("jquery"), require("blobjs"), require("file-saverjs"), require("xlsx-js")) : e(t, t.jQuery, t.Blob, t.saveAs, t.XLSX)
}(this, function(t, e, n, o, i) {
    "use strict";
    var r = function(t, n, o) {
        var s = this;
        s.settings = o ? n : e.extend({}, r.prototype.defaults, n),
            s.selectors = t;
        var a,
            p,
            f,
            l = r.prototype.rowDel,
            u = s.settings.ignoreRows
        instanceof Array ? s.settings.ignoreRows : [s.settings.ignoreRows],
            c = s.settings.ignoreCols
        instanceof Array ? s.settings.ignoreCols : [s.settings.ignoreCols],
            x = s.settings.ignoreCSS
        instanceof Array ? s.settings.ignoreCSS.join(", ") : s.settings.ignoreCSS,
            d = s.settings.emptyCSS
        instanceof Array ? s.settings.emptyCSS.join(", ") : s.settings.emptyCSS;
        return s.settings.bootstrap ? (a = r.prototype.bootstrap[0] + " ", p = r.prototype.bootstrap[1] + " ", f = r.prototype.bootstrap[2] + " ") : (a = r.prototype.defaultButton + " ", p = f = ""),
            s.selectors.each(function() {
                function t(t) {
                    var e = y.find("caption:not(.head)");
                    e.length ? e.append(t) : y.prepend('<caption class="' + f + s.settings.position + '">' + t + "</caption>")
                }

                function n(e, n, o) {
                    var i = "<button data-fileblob='" + e + "' class='" + a + p + o + "'>" + n + "</button>";
                    t(i)
                }
                var y = e(this);
                o && y.find("caption:not(.head)").remove();
                var m = y.find("tbody").find("tr"),
                    m = s.settings.headings ? m.add(y.find("thead>tr")) : m,
                    m = s.settings.footers ? m.add(y.find("tfoot>tr")) : m,
                    g = s.settings.headings ? y.find("thead>tr").length : 0,
                    b = "id" === s.settings.fileName ? y.attr("id") ? y.attr("id") : r.prototype.defaultFileName : s.settings.fileName,
                    v = {
                        xlsx: function(t, o) {
                            var i = {},
                                s = m.map(function(t, n) {
                                    if (!~u.indexOf(t - g) && !e(n).is(x)) {
                                        var o = e(n).find("th, td");
                                        return [o.map(function(n, o) {
                                            if (!~c.indexOf(n) && !e(o).is(x)) {
                                                if (e(o).is(d))
                                                    return " ";

                                                if (o.hasAttribute("colspan") && (i[t] = i[t] || {}, i[t][n + 1] = o.getAttribute("colspan") - 1), o.hasAttribute("rowspan"))
                                                    for (var r = 1; r < o.getAttribute("rowspan"); r++)
                                                        i[t + r] = i[t + r] || {},
                                                        i[t + r][n] = 1;


                                                return i[t] && i[t][n] ? new
                                                Array(i[t][n]).concat(e(o).text()): e(o).text()
                                            }
                                        }).get()]
                                    }
                                }).get(),
                                a = r.prototype.escapeHtml(JSON.stringify({ data: s, fileName: o, mimeType: r.prototype.xlsx.mimeType, fileExtension: r.prototype.xlsx.fileExtension })),
                                p = r.prototype.xlsx.buttonContent,
                                f = r.prototype.xlsx.defaultClass;
                            n(a, p, f)
                        },
                        xlsm: function(t, o) {
                            var i = {},
                                s = m.map(function(t, n) {
                                    if (!~u.indexOf(t - g) && !e(n).is(x)) {
                                        var o = e(n).find("th, td");
                                        return [o.map(function(n, o) {
                                            if (!~c.indexOf(n) && !e(o).is(x)) {
                                                if (e(o).is(d))
                                                    return " ";

                                                if (o.hasAttribute("colspan") && (i[t] = i[t] || {}, i[t][n + 1] = o.getAttribute("colspan") - 1), o.hasAttribute("rowspan"))
                                                    for (var r = 1; r < o.getAttribute("rowspan"); r++)
                                                        i[t + r] = i[t + r] || {},
                                                        i[t + r][n] = 1;


                                                return i[t] && i[t][n] ? new Array(i[t][n]).concat(e(o).text()) : e(o).text()
                                            }
                                        }).get()]
                                    }
                                }).get(),
                                a = r.prototype.escapeHtml(JSON.stringify({ data: s, fileName: o, mimeType: r.prototype.xls.mimeType, fileExtension: r.prototype.xls.fileExtension })),
                                p = r.prototype.xls.buttonContent,
                                f = r.prototype.xls.defaultClass;
                            n(a, p, f)
                        },
                        xls: function(t, o) {
                            var i = r.prototype.xls.separator,
                                s = m.map(function(t, n) {
                                    if (!~u.indexOf(t - g) && !e(n).is(x)) {
                                        var o = e(n).find("th, td");
                                        return o.map(function(t, n) {
                                            if (!~c.indexOf(t) && !e(n).is(x))
                                                return e(n).is(d) ? " " : e(n).text()

                                        }).get().join(i)
                                    }
                                }).get().join(t),
                                a = r.prototype.escapeHtml(JSON.stringify({ data: s, fileName: o, mimeType: r.prototype.xls.mimeType, fileExtension: r.prototype.xls.fileExtension })),
                                p = r.prototype.xls.buttonContent,
                                f = r.prototype.xls.defaultClass;
                            n(a, p, f)
                        },
                        csv: function(t, o) {
                            var i = r.prototype.csv.separator,
                                s = m.map(function(t, n) {
                                    if (!~u.indexOf(t - g) && !e(n).is(x)) {
                                        var o = e(n).find("th, td");
                                        return o.map(function(t, n) {
                                            if (!~c.indexOf(t) && !e(n).is(x))
                                                return e(n).is(d) ? " " : '"' + e(n).text().replace(/"/g, '""') + '"'

                                        }).get().join(i)
                                    }
                                }).get().join(t),
                                a = r.prototype.escapeHtml(JSON.stringify({ data: s, fileName: o, mimeType: r.prototype.csv.mimeType, fileExtension: r.prototype.csv.fileExtension })),
                                p = r.prototype.csv.buttonContent,
                                f = r.prototype.csv.defaultClass;
                            n(a, p, f)
                        },
                        txt: function(t, o) {
                            var i = r.prototype.txt.separator,
                                s = m.map(function(t, n) {
                                    if (!~u.indexOf(t - g) && !e(n).is(x)) {
                                        var o = e(n).find("th, td");
                                        return o.map(function(t, n) {
                                            if (!~c.indexOf(t) && !e(n).is(x))
                                                return e(n).is(d) ? " " : e(n).text()

                                        }).get().join(i)
                                    }
                                }).get().join(t),
                                a = r.prototype.escapeHtml(JSON.stringify({ data: s, fileName: o, mimeType: r.prototype.txt.mimeType, fileExtension: r.prototype.txt.fileExtension })),
                                p = r.prototype.txt.buttonContent,
                                f = r.prototype.txt.defaultClass;
                            n(a, p, f)
                        }
                    };
                s.settings.formats.forEach(function(t) {
                    !(!i || "xls" !== t) && (t = "xlsm"), !i && "xlsx" === t && (t = null),
                        t && v[t](l, b)
                })
            }),
            e("button[data-fileblob]").off("click").on("click", function() {
                var t = e(this).data("fileblob"),
                    n = t.data,
                    o = t.fileName,
                    i = t.mimeType,
                    s = t.fileExtension;
                r.prototype.export2file(n, i, o, s)
            }),
            s
    };
    r.prototype = {
            version: "3.3.5",
            defaults: {
                headings: !0,
                footers: !0,
                formats: [
                    "xls", "csv", "txt"
                ],
                fileName: "id",
                bootstrap: !0,
                position: "bottom",
                ignoreRows: null,
                ignoreCols: null,
                ignoreCSS: ".tableexport-ignore",
                emptyCSS: ".tableexport-empty"
            },
            charset: "charset=utf-8",
            defaultFileName: "myDownload",
            defaultButton: "button-default",
            bootstrap: [
                "btn", "btn-default", "btn-toolbar"
            ],
            rowDel: "\r\n",
            entityMap: {
                "&": "&#38;",
                "<": "&#60;",
                ">": "&#62;",
                "'": "&#39;",
                "/": "&#47;"
            },
            xlsx: {
                defaultClass: "xlsx",
                buttonContent: "Export to xlsx",
                mimeType: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
                fileExtension: ".xlsx"
            },
            xls: {
                defaultClass: "xls",
                buttonContent: "Exportar a Excel",
                separator: "\t",
                mimeType: "application/vnd.ms-excel",
                fileExtension: ".xls"
            },
            csv: {
                defaultClass: "csv",
                buttonContent: "Export to csv",
                separator: ",",
                mimeType: "text/csv",
                fileExtension: ".csv"
            },
            txt: {
                defaultClass: "txt",
                buttonContent: "Export to txt",
                separator: "  ",
                mimeType: "text/plain",
                fileExtension: ".txt"
            },
            escapeHtml: function(t) {
                return String(t).replace(/[&<>'\/]/g, function(t) {
                    return r.prototype.entityMap[t]
                })
            },
            dateNum: function(t, e) {
                e && (t += 1462);
                var n = Date.parse(t);
                return (n - new Date(Date.UTC(1899, 11, 30))) / 864e5
            },
            createSheet: function(t) {
                for (var e = {}, n = {
                        s: {
                            c: 1e7,
                            r: 1e7
                        },
                        e: {
                            c: 0,
                            r: 0
                        }
                    }, o = 0; o != t.length; ++o)
                    for (var r = 0; r != t[o].length; ++r) {
                        n.s.r > o && (n.s.r = o),
                            n.s.c > r && (n.s.c = r),
                            n.e.r < o && (n.e.r = o),
                            n.e.c < r && (n.e.c = r);
                        var s = {
                            v: t[o][r]
                        };
                        if (null != s.v) {
                            var a = i.utils.encode_cell({ c: r, r: o });
                            "number" == typeof s.v ? s.t = "n" : "boolean" == typeof s.v ? s.t = "b" : s.v instanceof Date ? (s.t = "n", s.z = i.SSF._table[14], s.v = this.dateNum(s.v)) : s.t = "s",
                                e[a] = s
                        }
                    }

                return n.s.c < 1e7 && (e["!ref"] = i.utils.encode_range(n)),
                    e
            },
            Workbook: function() {
                this.SheetNames = [],
                    this.Sheets = {}
            },
            string2ArrayBuffer: function(t) {
                for (var e = new ArrayBuffer(t.length), n = new Uint8Array(e), o = 0; o != t.length; ++o)
                    n[o] = 255 & t.charCodeAt(o);

                return e
            },
            export2file: function(t, e, r, s) {
                if (i && ".xls" == s.substr(0, 4)) {
                    var a = new this.Workbook,
                        p = this.createSheet(t);
                    a.SheetNames.push(r),
                        a.Sheets[r] = p;
                    var f = {
                            bookType: s.substr(1, 3) + (s.substr(4) || "m"),
                            bookSST: !1,
                            type: "binary"
                        },
                        l = i.write(a, f);
                    t = this.string2ArrayBuffer(l)
                }
                o(new n([t], {
                    type: e + ";" + this.charset
                }), r + s, !0)
            },
            update: function(t) {
                return new r(this.selectors, e.extend({}, this.settings, t), (!0))
            },
            reset: function() {
                return new r(this.selectors, settings, (!0))
            },
            remove: function() {
                this.selectors.each(function() {
                    e(this).find("caption:not(.head)").remove()
                })
            }
        },
        e.fn.tableExport = function(t, e) {
            return new r(this, t, e)
        };
    for (var s in r.prototype)
        e.fn.tableExport[s] = r.prototype[s];

    return t["default"] = t.TableExport = r
});
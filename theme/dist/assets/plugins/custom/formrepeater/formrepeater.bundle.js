var identity = function (t) {
    return t;
  },
  isArray = function (t) {
    return $.isArray(t);
  },
  isObject = function (t) {
    return !isArray(t) && t instanceof Object;
  },
  isNumber = function (t) {
    return t instanceof Number;
  },
  isFunction = function (t) {
    return t instanceof Function;
  },
  indexOf = function (t, e) {
    return $.inArray(e, t);
  },
  inArray = function (t, e) {
    return -1 !== indexOf(t, e);
  },
  foreach = function (t, e) {
    for (var n in t) t.hasOwnProperty(n) && e(t[n], n, t);
  },
  last = function (t) {
    return t[t.length - 1];
  },
  argumentsToArray = function (t) {
    return Array.prototype.slice.call(t);
  },
  extend = function () {
    var t = {};
    return (
      foreach(argumentsToArray(arguments), function (e) {
        foreach(e, function (e, n) {
          t[n] = e;
        });
      }),
      t
    );
  },
  mapToArray = function (t, e) {
    var n = [];
    return (
      foreach(t, function (t, r, i) {
        n.push(e(t, r, i));
      }),
      n
    );
  },
  mapToObject = function (t, e, n) {
    var r = {};
    return (
      foreach(t, function (t, i, a) {
        (i = n ? n(i, t) : i), (r[i] = e(t, i, a));
      }),
      r
    );
  },
  map = function (t, e, n) {
    return isArray(t) ? mapToArray(t, e) : mapToObject(t, e, n);
  },
  pluck = function (t, e) {
    return map(t, function (t) {
      return t[e];
    });
  },
  filter = function (t, e) {
    var n;
    return (
      isArray(t)
        ? ((n = []),
          foreach(t, function (t, r, i) {
            e(t, r, i) && n.push(t);
          }))
        : ((n = {}),
          foreach(t, function (t, r, i) {
            e(t, r, i) && (n[r] = t);
          })),
      n
    );
  },
  call = function (t, e, n) {
    return map(t, function (t, r) {
      return t[e].apply(t, n || []);
    });
  },
  throttle = function (t, e) {
    var n = null;
    return function () {
      var r = arguments;
      null === n &&
        ((n = setTimeout(function () {
          n = null;
        }, t)),
        e.apply(this, r));
    };
  },
  mixinPubSub = function (t) {
    var e = {};
    return (
      ((t = t || {}).publish = function (t, n) {
        foreach(e[t], function (t) {
          t(n);
        });
      }),
      (t.subscribe = function (t, n) {
        (e[t] = e[t] || []), e[t].push(n);
      }),
      (t.unsubscribe = function (t) {
        foreach(e, function (e) {
          var n = indexOf(e, t);
          -1 !== n && e.splice(n, 1);
        });
      }),
      t
    );
  };
!(function (t) {
  "use strict";
  var e = function (t, e) {
      var n,
        r = mixinPubSub(),
        i = t.$;
      return (
        (r.getType = function () {
          throw 'implement me (return type. "text", "radio", etc.)';
        }),
        (r.$ = function (t) {
          return t ? i.find(t) : i;
        }),
        (r.disable = function () {
          r.$().prop("disabled", !0), r.publish("isEnabled", !1);
        }),
        (r.enable = function () {
          r.$().prop("disabled", !1), r.publish("isEnabled", !0);
        }),
        (e.equalTo = function (t, e) {
          return t === e;
        }),
        (e.publishChange = function (t, i) {
          var a = r.get();
          e.equalTo(a, n) || r.publish("change", { e: t, domElement: i }),
            (n = a);
        }),
        r
      );
    },
    n = function (t, n) {
      var r = e(t, n);
      return (
        (r.get = function () {
          return r.$().val();
        }),
        (r.set = function (t) {
          r.$().val(t);
        }),
        (r.clear = function () {
          r.set("");
        }),
        (n.buildSetter = function (t) {
          return function (e) {
            t.call(r, e);
          };
        }),
        r
      );
    },
    r = function (t, e) {
      (t = isArray(t) ? t : [t]), (e = isArray(e) ? e : [e]);
      var n = !0;
      return (
        t.length !== e.length
          ? (n = !1)
          : foreach(t, function (t) {
              inArray(e, t) || (n = !1);
            }),
        n
      );
    },
    i = function (t) {
      var e = {},
        r = n(t, e);
      return (
        (r.getType = function () {
          return "button";
        }),
        r.$().on("change", function (t) {
          e.publishChange(t, this);
        }),
        r
      );
    },
    a = function (e) {
      var i = {},
        a = n(e, i);
      return (
        (a.getType = function () {
          return "checkbox";
        }),
        (a.get = function () {
          var e = [];
          return (
            a
              .$()
              .filter(":checked")
              .each(function () {
                e.push(t(this).val());
              }),
            e
          );
        }),
        (a.set = function (e) {
          (e = isArray(e) ? e : [e]),
            a.$().each(function () {
              t(this).prop("checked", !1);
            }),
            foreach(e, function (t) {
              a.$()
                .filter('[value="' + t + '"]')
                .prop("checked", !0);
            });
        }),
        (i.equalTo = r),
        a.$().change(function (t) {
          i.publishChange(t, this);
        }),
        a
      );
    },
    u = function (t) {
      var e = m(t, {});
      return (
        (e.getType = function () {
          return "email";
        }),
        e
      );
    },
    c = function (n) {
      var r = {},
        i = e(n, r);
      return (
        (i.getType = function () {
          return "file";
        }),
        (i.get = function () {
          return last(i.$().val().split("\\"));
        }),
        (i.clear = function () {
          this.$().each(function () {
            t(this).wrap("<form>").closest("form").get(0).reset(),
              t(this).unwrap();
          });
        }),
        i.$().change(function (t) {
          r.publishChange(t, this);
        }),
        i
      );
    },
    o = function (t) {
      var e = {},
        r = n(t, e);
      return (
        (r.getType = function () {
          return "hidden";
        }),
        r.$().change(function (t) {
          e.publishChange(t, this);
        }),
        r
      );
    },
    f = function (n) {
      var r = {},
        i = e(n, r);
      return (
        (i.getType = function () {
          return "file[multiple]";
        }),
        (i.get = function () {
          var t,
            e = i.$().get(0).files || [],
            n = [];
          for (t = 0; t < (e.length || 0); t += 1) n.push(e[t].name);
          return n;
        }),
        (i.clear = function () {
          this.$().each(function () {
            t(this).wrap("<form>").closest("form").get(0).reset(),
              t(this).unwrap();
          });
        }),
        i.$().change(function (t) {
          r.publishChange(t, this);
        }),
        i
      );
    },
    s = function (t) {
      var e = {},
        i = n(t, e);
      return (
        (i.getType = function () {
          return "select[multiple]";
        }),
        (i.get = function () {
          return i.$().val() || [];
        }),
        (i.set = function (t) {
          i.$().val("" === t ? [] : isArray(t) ? t : [t]);
        }),
        (e.equalTo = r),
        i.$().change(function (t) {
          e.publishChange(t, this);
        }),
        i
      );
    },
    l = function (t) {
      var e = m(t, {});
      return (
        (e.getType = function () {
          return "password";
        }),
        e
      );
    },
    p = function (e) {
      var r = {},
        i = n(e, r);
      return (
        (i.getType = function () {
          return "radio";
        }),
        (i.get = function () {
          return i.$().filter(":checked").val() || null;
        }),
        (i.set = function (e) {
          e
            ? i
                .$()
                .filter('[value="' + e + '"]')
                .prop("checked", !0)
            : i.$().each(function () {
                t(this).prop("checked", !1);
              });
        }),
        i.$().change(function (t) {
          r.publishChange(t, this);
        }),
        i
      );
    },
    h = function (t) {
      var e = {},
        r = n(t, e);
      return (
        (r.getType = function () {
          return "range";
        }),
        r.$().change(function (t) {
          e.publishChange(t, this);
        }),
        r
      );
    },
    d = function (t) {
      var e = {},
        r = n(t, e);
      return (
        (r.getType = function () {
          return "select";
        }),
        r.$().change(function (t) {
          e.publishChange(t, this);
        }),
        r
      );
    },
    m = function (t) {
      var e = {},
        r = n(t, e);
      return (
        (r.getType = function () {
          return "text";
        }),
        r.$().on("change keyup keydown", function (t) {
          e.publishChange(t, this);
        }),
        r
      );
    },
    v = function (t) {
      var e = {},
        r = n(t, e);
      return (
        (r.getType = function () {
          return "textarea";
        }),
        r.$().on("change keyup keydown", function (t) {
          e.publishChange(t, this);
        }),
        r
      );
    },
    y = function (t) {
      var e = m(t, {});
      return (
        (e.getType = function () {
          return "url";
        }),
        e
      );
    },
    g = function (e) {
      var n = {},
        r = e.$,
        g = e.constructorOverride || {
          button: i,
          text: m,
          url: y,
          email: u,
          password: l,
          range: h,
          textarea: v,
          select: d,
          "select[multiple]": s,
          radio: p,
          checkbox: a,
          file: c,
          "file[multiple]": f,
          hidden: o,
        },
        $ = function (e, i) {
          (isObject(i) ? i : r.find(i)).each(function () {
            var r = t(this).attr("name");
            n[r] = g[e]({ $: t(this) });
          });
        },
        b = function (e, i) {
          var a = [],
            u = isObject(i) ? i : r.find(i);
          isObject(i)
            ? (n[u.attr("name")] = g[e]({ $: u }))
            : (u.each(function () {
                -1 === indexOf(a, t(this).attr("name")) &&
                  a.push(t(this).attr("name"));
              }),
              foreach(a, function (t) {
                n[t] = g[e]({ $: r.find('input[name="' + t + '"]') });
              }));
        };
      return (
        r.is("input, select, textarea")
          ? r.is('input[type="button"], button, input[type="submit"]')
            ? $("button", r)
            : r.is("textarea")
            ? $("textarea", r)
            : r.is('input[type="text"]') || (r.is("input") && !r.attr("type"))
            ? $("text", r)
            : r.is('input[type="password"]')
            ? $("password", r)
            : r.is('input[type="email"]')
            ? $("email", r)
            : r.is('input[type="url"]')
            ? $("url", r)
            : r.is('input[type="range"]')
            ? $("range", r)
            : r.is("select")
            ? r.is("[multiple]")
              ? $("select[multiple]", r)
              : $("select", r)
            : r.is('input[type="file"]')
            ? r.is("[multiple]")
              ? $("file[multiple]", r)
              : $("file", r)
            : r.is('input[type="hidden"]')
            ? $("hidden", r)
            : r.is('input[type="radio"]')
            ? b("radio", r)
            : r.is('input[type="checkbox"]')
            ? b("checkbox", r)
            : $("text", r)
          : ($("button", 'input[type="button"], button, input[type="submit"]'),
            $("text", 'input[type="text"]'),
            $("password", 'input[type="password"]'),
            $("email", 'input[type="email"]'),
            $("url", 'input[type="url"]'),
            $("range", 'input[type="range"]'),
            $("textarea", "textarea"),
            $("select", "select:not([multiple])"),
            $("select[multiple]", "select[multiple]"),
            $("file", 'input[type="file"]:not([multiple])'),
            $("file[multiple]", 'input[type="file"][multiple]'),
            $("hidden", 'input[type="hidden"]'),
            b("radio", 'input[type="radio"]'),
            b("checkbox", 'input[type="checkbox"]')),
        n
      );
    };
  (t.fn.inputVal = function (e) {
    var n = t(this),
      r = g({ $: n });
    return n.is("input, textarea, select")
      ? void 0 === e
        ? r[n.attr("name")].get()
        : (r[n.attr("name")].set(e), n)
      : void 0 === e
      ? call(r, "get")
      : (foreach(e, function (t, e) {
          r[e].set(t);
        }),
        n);
  }),
    (t.fn.inputOnChange = function (e) {
      var n = t(this),
        r = g({ $: n });
      return (
        foreach(r, function (t) {
          t.subscribe("change", function (t) {
            e.call(t.domElement, t.e);
          });
        }),
        n
      );
    }),
    (t.fn.inputDisable = function () {
      var e = t(this);
      return call(g({ $: e }), "disable"), e;
    }),
    (t.fn.inputEnable = function () {
      var e = t(this);
      return call(g({ $: e }), "enable"), e;
    }),
    (t.fn.inputClear = function () {
      var e = t(this);
      return call(g({ $: e }), "clear"), e;
    });
})(jQuery),
  ($.fn.repeaterVal = function () {
    var t,
      e,
      n = function (t) {
        if (
          1 === t.length &&
          (0 === t[0].key.length || (1 === t[0].key.length && !t[0].key[0]))
        )
          return t[0].val;
        foreach(t, function (t) {
          t.head = t.key.shift();
        });
        var e,
          r = (function () {
            var e = {};
            return (
              foreach(t, function (t) {
                e[t.head] || (e[t.head] = []), e[t.head].push(t);
              }),
              e
            );
          })();
        return (
          /^[0-9]+$/.test(t[0].head)
            ? ((e = []),
              foreach(r, function (t) {
                e.push(n(t));
              }))
            : ((e = {}),
              foreach(r, function (t, r) {
                e[r] = n(t);
              })),
          e
        );
      };
    return n(
      ((t = $(this).inputVal()),
      (e = []),
      foreach(t, function (t, n) {
        var r = [];
        "undefined" !== n &&
          (r.push(n.match(/^[^\[]*/)[0]),
          (r = r.concat(
            map(n.match(/\[[^\]]*\]/g), function (t) {
              return t.replace(/[\[\]]/g, "");
            })
          )),
          e.push({ val: t, key: r }));
      }),
      e)
    );
  }),
  ($.fn.repeater = function (t) {
    var e;
    return (
      (t = t || {}),
      $(this).each(function () {
        var n = $(this),
          r =
            t.show ||
            function () {
              $(this).show();
            },
          i =
            t.hide ||
            function (t) {
              t();
            },
          a = n.find("[data-repeater-list]").first(),
          u = function (t, e) {
            return t.filter(function () {
              return (
                !e ||
                0 === $(this).closest(pluck(e, "selector").join(",")).length
              );
            });
          },
          c = function () {
            return u(a.find("[data-repeater-item]"), t.repeaters);
          },
          o = a.find("[data-repeater-item]").first().clone().hide(),
          f = u(
            u($(this).find("[data-repeater-item]"), t.repeaters)
              .first()
              .find("[data-repeater-delete]"),
            t.repeaters
          );
        t.isFirstItemUndeletable && f && f.remove();
        var s = function () {
            var e = a.data("repeater-list");
            return t.$parent ? t.$parent.data("item-name") + "[" + e + "]" : e;
          },
          l = function (e) {
            t.repeaters &&
              e.each(function () {
                var e = $(this);
                foreach(t.repeaters, function (t) {
                  e.find(t.selector).repeater(extend(t, { $parent: e }));
                });
              });
          },
          p = function (t, e, n) {
            t &&
              foreach(t, function (t) {
                n.call(e.find(t.selector)[0], t);
              });
          },
          h = function (t, e, n) {
            t.each(function (t) {
              var r = $(this);
              r.data("item-name", e + "[" + t + "]"),
                u(r.find("[name]"), n).each(function () {
                  var i = $(this),
                    a = i.attr("name").match(/\[[^\]]+\]/g),
                    c = a ? last(a).replace(/\[|\]/g, "") : i.attr("name"),
                    o =
                      e +
                      "[" +
                      t +
                      "][" +
                      c +
                      "]" +
                      (i.is(":checkbox") || i.attr("multiple") ? "[]" : "");
                  i.attr("name", o),
                    p(n, r, function (n) {
                      var r = $(this);
                      h(
                        u(r.find("[data-repeater-item]"), n.repeaters || []),
                        e +
                          "[" +
                          t +
                          "][" +
                          r
                            .find("[data-repeater-list]")
                            .first()
                            .data("repeater-list") +
                          "]",
                        n.repeaters
                      );
                    });
                });
            }),
              a
                .find("input[name][checked]")
                .removeAttr("checked")
                .prop("checked", !0);
          };
        h(c(), s(), t.repeaters),
          l(c()),
          t.initEmpty && c().remove(),
          t.ready &&
            t.ready(function () {
              h(c(), s(), t.repeaters);
            });
        var d,
          m =
            ((d = function (e, n, r) {
              if (n || t.defaultValues) {
                var i = {};
                u(e.find("[name]"), r).each(function () {
                  var t = $(this)
                    .attr("name")
                    .match(/\[([^\]]*)(\]|\]\[\])$/)[1];
                  i[t] = $(this).attr("name");
                }),
                  e.inputVal(
                    map(
                      filter(n || t.defaultValues, function (t, e) {
                        return i[e];
                      }),
                      identity,
                      function (t) {
                        return i[t];
                      }
                    )
                  );
              }
              p(r, e, function (t) {
                var e = $(this);
                u(e.find("[data-repeater-item]"), t.repeaters).each(
                  function () {
                    var r = e
                      .find("[data-repeater-list]")
                      .data("repeater-list");
                    if (n && n[r]) {
                      var i = $(this).clone();
                      e.find("[data-repeater-item]").remove(),
                        foreach(n[r], function (n) {
                          var r = i.clone();
                          d(r, n, t.repeaters || []),
                            e.find("[data-repeater-list]").append(r);
                        });
                    } else d($(this), t.defaultValues, t.repeaters || []);
                  }
                );
              });
            }),
            function (e, n) {
              a.append(e),
                h(c(), s(), t.repeaters),
                e.find("[name]").each(function () {
                  $(this).inputClear();
                }),
                d(e, n || t.defaultValues, t.repeaters);
            }),
          v = function (e) {
            var n = o.clone();
            m(n, e), t.repeaters && l(n), r.call(n.get(0));
          };
        (e = function (t) {
          c().remove(), foreach(t, v);
        }),
          u(n.find("[data-repeater-create]"), t.repeaters).click(function () {
            v();
          }),
          a.on("click", "[data-repeater-delete]", function () {
            var e = $(this).closest("[data-repeater-item]").get(0);
            i.call(e, function () {
              $(e).remove(), h(c(), s(), t.repeaters);
            });
          });
      }),
      (this.setList = e),
      this
    );
  });

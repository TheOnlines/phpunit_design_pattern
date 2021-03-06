# 实践23种设计模式
### 开发工具
* phpunit 开发
* phpstorm

### 思考
* 单元测试是以用户故事的角度进行的
* 不要着急写业务代码,要先写测试,测试相当于制定了这个代码的标准,有了这个标准,只要靠着劳动去写就行了.
* 先看冗余的是创建 结构 还是行为, 得到结果后, 判断用哪种类型的设计模式.

## 5种创建型 (created type)
* <font color=red>简单工厂模式&&工厂模式&&抽象工厂模式((simple factory && factory && abstract factory) pattern)</font>  
  <font size = 3>一句话需求: 将产品抽象, 即一个工厂可以加工同一类型不同实体的产品.即一个工厂针对一个产品类型.</font>   
  <font size = 3>  
  验收标准:
  - [x] 调用惠普工厂获取S1型号的手机,工厂存在S1型号流水线,工厂返回S1型号的手机对象
  - [x] 调用惠普工厂获取S1型号的手机,工厂存在S1型号流水线,工厂返回S1型号的手机对象, 从对象中获取型号为S1
  - [x] 调用惠普工厂获取S1型号的手机,工厂不存在S1型号流水线,工厂返回不存在加工流水线异常.
  - [x] 调用惠普工厂获取S1型号的手机,工厂存在S2型号流水线,工厂返回S2型号的手机对象
  - [x] 调用惠普工厂获取S1型号的手机,工厂存在S2型号流水线,工厂返回S2型号的手机对象, 从对象中获取型号为S2
  - [x] 调用惠普工厂获取S1型号的手机,工厂不存在S2型号流水线,工厂返回不存在加工流水线异常.
  - [x] 新增惠普工厂获取S1型号的电脑,工厂存在S1型号流水线,工厂返回S1型号的手机对象
  - [x] 新增惠普工厂获取S1型号的电脑,工厂存在S1型号流水线,工厂返回S1型号的手机对象, 从对象中获取型号为S1
    </font>

* <font color=red>建造者模式(builder model ) </font>  
  <font size = 3>一句话需求: 介绍小明</font>   
  <font size = 3>  
  验收标准: 
  - [x] 调用小明对象, 返回 身高:1,体重:2,爱好:3,年龄:5;
  - [x] 新增需求: 调用小明对象, 返回 身高:1,体重:2,爱好:3,年龄:5,职业:6; 
    </font>

* <font color=red>单例模式(singleton model ) </font>  
  <font size = 3>一句话需求: 在一个类的不同方法中 调用另一个对象</font>   
  <font size = 3>  
  验收标准:
  - [x] 当调用类Foo的getBar1方法时, getBar1返回Bar对象;当调用类Foo的getBar2方法时, getBar2返回Bar对象;  
    </font>

* <font color=red>原型模式(prototype model ) </font>  
  <font size = 3>一句话需求: 以复制的方式解决大数据创建的问题</font>   
  <font size = 3>  
  验收标准:
  - [x] 浅拷贝: 当调用对象Foo的copy方法时,copy返回Foo_c对象, 调用Foo对象的setBar1Parameter传值1 调用Foo_c的对象的getBar1Parameter方法,返回1;
  - [x] 深拷贝: 当调用对象Foo1的copy方法时,copy返回Foo1_c对象, 调用Foo1对象的setBar1Parameter传值1 调用Foo1_c的对象的getBar1Parameter方法,返回null;
    </font>
## 7种结构型 (struct type)
* <font color=red>代理模式(proxy model ) </font>  
  <font size = 3>一句话需求: 在三方接口上添加新的功能</font>   
  <font size = 3>  
  验收标准:
  - [x] 通过proxy代理类调用图片ImagerService服务的call方法,返回proxy_123.jpg 
    </font>

* <font color=red>桥接模式(bridging model ) </font>  
  <font size = 3>一句话需求: 手机品牌和手机软件不兼容的问题.</font>   
  <font size = 3>  
  验收标准:
  - [x] 调用苹果品牌的软件 功能1为 "苹果拍照",功能2位 "苹果打电话"
  - [x] 调用华为品牌的软件 功能1为 "华为听音乐",功能2位 "华为打地鼠游戏"
    </font>

* <font color=red>享元模式(flyweight model ) </font>  
  <font size = 3>一句话需求: 获取电池充电.每次充百分之一</font>   
  <font size = 3>  
  验收标准:
  - [x] 获取电池battery充电,电量返回100,再次充电返回电池电量99
    </font>
    
* <font color=red>装饰器模式(Decorator model) </font>  
  <font size = 3>一句话需求: 点一杯咖啡,加糖,加冰,计算其总价</font>   
  <font size = 3>  
  验收标准:
  - [x] 咖啡调用咖啡金额,返回一元.
  - [x] 咖啡调用咖啡加糖(0.1元),返回1.1元.
  - [x] 咖啡调用咖啡加糖(0.2元),返回1.2元.
  - [x] 咖啡调用咖啡加糖(0.2元)加冰(0.1元),返回1.3元.
    </font>

* <font color=red>适配器模式(Adapter model) </font>  
  <font size = 3>一句话需求: 家中墙上只有两个头的插座, 冰箱需要一个头,电视需要三个头,如何连接到家里的墙上</font>   
  <font size = 3>  
  验收标准: 
  - [x] 冰箱正常充电 返回冰箱已充电.
  - [x] 电视正常充电 返回电视已充电.
  - [x] 冰箱对象插入一个头插座对象,返回冰箱已充电.
  - [x] 电视对象插入三个头插座对象,返回电视已充电.
    </font>    

* <font color=red>组合模式(Composite model) </font>  
  <font size = 3>一句话需求: 公司下方有很多子公司 子公司下方又有子子公司 </font>   
  <font size = 3>  
  验收标准:
  - [x] Company公司添加子公司(son1)返回为true
  - [x] Company公司添加子公司(son1)返回为true,子公司(son1)添加子公司(son1-1)返回为true,公司获取子公司 返回子公司名称(总公司son1son1-1).
    </font>

* <font color=red>门面模式(Facade model) </font>  
  <font size = 3>一句话需求: 去三亚旅游,坐飞机,住酒店,玩</font>   
  <font size = 3>  
  验收标准:
  - [x] 调用飞机 返回起飞
  - [x] 调用住酒店 返回住酒店完成
  - [x] 调用玩, 返回玩的很开心
  - [x] 调用飞机酒店和玩 返回 起飞住酒店玩的很开心
    </font>
    
## 11种行为型 (behavior type)
* <font color=red>迭代器模式 (iterator)  </font>
* <font color=red>状态模式 (status)</font>  
  
  <font size = 3>一句话需求: 不同时间段的状态场景:  早上去上班, 白天然后工作 , 下午下班, 然后晚上睡觉.</font>   
  <font size = 3>  
  验收标准:
    - [x] 早上时间段 返回上班
    - [x] 工作时间时间段 返回工作
    - [x] 下午时间段 返回下班
    - [x] 晚上时间段 返回睡觉
      </font>  
      
* <font color=red>访问者模式 (visitor)   </font>  
<font size = 3>一句话需求: 不同的文件, 工厂需要提取不同的格式的内容,而且提取的内容可能要加不同的特殊处理.</font>   
  <font size = 3>  
    验收标准:
    - [x] 有 pdf 文件 ,pdf的内容是123.
    - [x] 有 word 文件其内容为456 .
    - [x] 测试访问者 vistA 处理后  pdf的值为vistApdf123
    - [x] 测试访问者 vistA 处理后 word的值为vistAword456
    - [x] 测试访问者 vistA 处理Excel, 但不存在对应的处理逻辑. 返回访问异常.
    - [x] 访问者上下文类 其中有文件类属性  以及 添加文件类行为 添加成功 返回为true
    - [x] 访问者上下文类, 其中有文件类属性  以及 执行文件类行为 添加访问者依次验证访问每个文件类. 当某个类不存在访问者执行程序时.剖异常.
    </font>  

* <font color=red>模板模式 (template)   </font>  
  <font size = 3>一句话需求: 坐各种车</font>   
  <font size = 3>思考: 先写测试,在尽快将功能实现. 然后在重构实现, 重构的过程中如果发现测试变红了, 应该尽快让其变绿</font>
  <font size = 3>

  验收标准:
  - [x] 丰田车 返回 丰田车,红色车轱辘,蓝色方向盘,黑色车身
  - [x] 奔驰车 返回 奔驰车,白色车轱辘,青色方向盘,黄色色车身
    </font>  
    
* <font color=red>观察者模式 (observer)   </font>  
  <font size = 3>一句话需求: 监听后台上架一个商品时, 通知在多个店铺上架.</font>   
  <font size = 3>思考: 先写测试,在尽快将功能实现. 然后在重构实现, 重构的过程中如果发现测试变红了, 应该尽快让其变绿</font>
  <font size = 3>
  
  验收标准:
  - [x] 向观察者类中添加一个被观察者对象返回为true
  - [ ] 向观察者添加一个被观察者, 当观察者接到信息123, 被观察者也会收到123的信息. 
    </font>  

* <font color=red>责任链模式 (responsibility pattern)  </font>  
  <font size = 3>一句话需求: 将 `你是一个很傻很丑的狗子` 中的(很傻)(很丑)两个词过滤掉  </font>   
  <font size = 3>思考: 责任链中的多层处理器之间不应该有依赖,属性是实现信息不需要提前考虑,没有小步测试.</font>
  <font size = 3>

  验收标准:
  - [x] 生成责任链对象ResponsibilityChain 添加Responsibility 返回为ture
  - [x] 执行责任链 ResponsibilityChain handle, 输入`你是一个很傻很丑狗子`,没有责任对象的情况,返回`你是一个很傻很丑狗子`
  - [x] 添加一个责任对象内含`你是一个很傻狗子`的信息,然后添加一个处理`很傻`词 责任对象能够接收到`你是一个很傻狗子`的词
  - [x] 添加一个责任对象内含`你是一个很傻狗子`的信息,然后添加一个处理`很傻`词 责任对象, 处理结果返回`你是一个狗子`
  - [x] 添加一个责任对象内含`你是一个很丑狗子`的信息,然后添加一个`很丑`词责任对象能够接收到`你是一个很丑狗子`的词  
  - [x] 添加一个责任对象内含`你是一个很丑狗子`的信息, 添加一个责任对象处理`很丑`词, 返回你是一个狗子.
  - [x] 添加 `你是一个很傻很丑狗子`的信息, 分别添加能够处理很丑很傻两个词的处理, 处理完返回你是一个狗子    
</font>

* <font color=red>备忘录模式 (Token pattern)  </font>  
  <font size = 3>一句话需求: 因为不想听了暂停音乐, 下次在听从暂停时段开始听  </font>   
  <font size = 3>思考: </font>
  <font size = 3>

  验收标准:
  - [x] mp3对象 调用暂停,将当前音乐对象储存进入mp3中, 返回true
  - [x] mp3对象 调用开始,返回开始的音乐对象
    </font>

* <font color=red>解释器模式 (Token pattern)  </font>  
  <font size = 3>一句话需求: 实现计算机功能 </font>   
  <font size = 3>思考:转换就代表着在干多个维度的事， 直接请求 而不是加if转换, 用方法名替代if转换,因为if本身就是在做多件事,所有要测试的值在场景中场景,不允许出现一会对一会错的情况</font>
  <font size = 3>

  验收标准:
  - [x] 不支持的语法,报RuntimeException Error
  - [x] 输入 1 + 1 输出 2
  - [x] 输入 5 - 2 输出 4
  - [x] 输入 4 / 2 输出2
  - [x] 输入 4 / 2 输出2
    </font>


* <font color=red>策略模式 (Strategy pattern)  </font>  
  <font size = 3>一句话需求: 下班回家 </font>   
  <font size = 3>思考:下班回家是目的,达到这个目的的方式有很多种, 比如骑自行车回家,做公交回家等等. 工具有一个统一的策略 `车`,车的属性时行驶, 编写测试 是从用户接触的最直接的角度去写的.用户获取`车` 是从街道(车工厂)上获取的,还是没有小步快跑的概念,没法做到,小步提交</font>
  <font size = 3>

  验收标准:
  - [x] 向工厂添加自行车类型 返回为true
  - [x] 向工厂获取自行车(bike) 返回为Bike
  - [x] 向工厂添加地铁类型 返回为true
  - [x] 向工厂获取地铁(Train) 返回为Train
    </font>

* <font color=red>命令模式 (command pattern)  </font>  
  <font size = 3>一句话需求: 执行linux 命令 cat grep </font>   
  <font size = 3>思考: 没有做到小步提交, 原因可能是因为没有将问题拆解 </font>
  <font size = 3>

  验收标准:
  - [x] 添加 CatCommand 命令, 执行命令输入test, lsCommand能接受到test
    </font>
* <font color=red>中介模式 (mediator pattern)  </font>  
      <font size = 3>一句话需求: wechat 好友之间的发送信息</font>   
      <font size = 3>思考: </font>
      <font size = 3>

  验收标准:
  - [x] 向微信注册用户a, 微信返回true,
  - [x] 用户a给微信好友b给发送信息123, 微信好友能够接到信息123
    </font>
  

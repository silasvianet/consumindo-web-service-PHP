﻿//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by a tool.
//     Runtime Version:4.0.30319.1
//
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace WindowsFormsApplication1.ServiceReference1 {
    
    
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    [System.ServiceModel.ServiceContractAttribute(Name="server.helloPortType", Namespace="urn:server.hello", ConfigurationName="ServiceReference1.serverhelloPortType")]
    public interface serverhelloPortType {
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:server.hello#hello", ReplyAction="*")]
        [System.ServiceModel.XmlSerializerFormatAttribute(Style=System.ServiceModel.OperationFormatStyle.Rpc, SupportFaults=true, Use=System.ServiceModel.OperationFormatUse.Encoded)]
        [return: System.ServiceModel.MessageParameterAttribute(Name="return")]
        string hello(string name);
    }
    
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    public interface serverhelloPortTypeChannel : WindowsFormsApplication1.ServiceReference1.serverhelloPortType, System.ServiceModel.IClientChannel {
    }
    
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    public partial class serverhelloPortTypeClient : System.ServiceModel.ClientBase<WindowsFormsApplication1.ServiceReference1.serverhelloPortType>, WindowsFormsApplication1.ServiceReference1.serverhelloPortType {
        
        public serverhelloPortTypeClient() {
        }
        
        public serverhelloPortTypeClient(string endpointConfigurationName) : 
                base(endpointConfigurationName) {
        }
        
        public serverhelloPortTypeClient(string endpointConfigurationName, string remoteAddress) : 
                base(endpointConfigurationName, remoteAddress) {
        }
        
        public serverhelloPortTypeClient(string endpointConfigurationName, System.ServiceModel.EndpointAddress remoteAddress) : 
                base(endpointConfigurationName, remoteAddress) {
        }
        
        public serverhelloPortTypeClient(System.ServiceModel.Channels.Binding binding, System.ServiceModel.EndpointAddress remoteAddress) : 
                base(binding, remoteAddress) {
        }
        
        public string hello(string name) {
            return base.Channel.hello(name);
        }
    }
}
